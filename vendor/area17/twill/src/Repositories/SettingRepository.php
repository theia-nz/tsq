<?php

namespace A17\Twill\Repositories;

use A17\Twill\Models\Setting;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use Illuminate\Config\Repository as Config;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class SettingRepository extends ModuleRepository
{
    use HandleMedias;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @param Setting $model
     * @param Config $config
     */
    public function __construct(Setting $model, Config $config)
    {
        $this->model = $model;
        $this->config = $config;
    }

    /**
     * @param string $key
     * @param string|null $section
     * @return string|null
     */
    public function byKey($key, $section = null)
    {
        $settingQuery = $this->model->when($section, function ($query) use ($section) {
            $query->where('section', $section);
        })->where('key', $key);

        if ($settingQuery->exists()) {
            return $settingQuery->with('translations')->first()->value;
        }

        return null;
    }

    /**
     * @param string|null $section
     * @return array
     */
    public function getFormFields($section = null)
    {
        $settings = $this->model->when($section, function ($query) use ($section) {
            $query->where('section', $section);
        })->with('translations', 'medias')->get();


        if (config('twill.media_library.translated_form_fields', false)) {
            $medias = $settings->reduce(function ($carry, $setting) {
                foreach (getLocales() as $locale) {
                    if (!empty(parent::getFormFields($setting)['medias'][$locale]) && !empty(parent::getFormFields($setting)['medias'][$locale][$setting->key]))
                    {
                        $carry[$locale][$setting->key] = parent::getFormFields($setting)['medias'][$locale][$setting->key];
                    }
                }
                return $carry;
            });
        } else {
            $medias = $settings->mapWithKeys(function ($setting) {
                return [$setting->key => parent::getFormFields($setting)['medias'][$setting->key] ?? null];
            })->filter()->toArray();
        }

        return $settings->mapWithKeys(function ($setting) {
            $settingValue = [];

            foreach ($setting->translations as $translation) {
                $settingValue[$translation->locale] = $translation->value;
            }

            return [$setting->key => count(getLocales()) > 1 ? $settingValue : $setting->value];
        })->toArray() + ['medias' => $medias];
    }

    /**
     * @param array $settingsFields
     * @param string|null $section
     * @return void
     */
    public function saveAll($settingsFields, $section = null)
    {
        $section = $section ? ['section' => $section] : [];

        foreach (Collection::make($settingsFields)->except('active_languages', 'medias', 'mediaMeta', 'update') as $key => $value) {
            foreach (getLocales() as $locale) {
                Arr::set(
                    $settingsTranslated,
                    $key . '.' . $locale,
                    [
                        'value' => is_array($value)
                        ? (array_key_exists($locale, $value) ? $value[$locale] : $value)
                        : $value,
                    ] + ['active' => true]
                );
            }
        }

        if (isset($settingsTranslated) && !empty($settingsTranslated)) {
            $settings = [];

            foreach ($settingsTranslated as $key => $values) {
                Arr::set($settings, $key, ['key' => $key] + $section + $values);
            }

            foreach ($settings as $key => $setting) {
                $this->model->updateOrCreate(['key' => $key] + $section, $setting);
            }
        }

        foreach ($settingsFields['medias'] ?? [] as $role => $mediasList) {
            $medias = [];

            if (config('twill.media_library.translated_form_fields', false)) {
                foreach (getLocales() as $locale) {
                    $medias["{$role}[{$locale}]"] = Collection::make($settingsFields['medias'][$role][$locale])->map(function ($media) {
                        return json_decode($media, true);
                    })->filter()->toArray();
                }
            } else {
                $medias =  [
                    $role => Collection::make($settingsFields['medias'][$role])->map(function ($media) {
                        return json_decode($media, true);
                    })->values()->filter()->toArray(),
                ];
            }


            $this->updateOrCreate($section + ['key' => $role], $section + [
                'key' => $role,
                'medias' => $medias,
            ]);
        }
    }

    /**
     * @param string $role
     * @return array
     */
    public function getCrops($role)
    {
        return $this->config->get('twill.settings.crops')[$role];
    }

}
