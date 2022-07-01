<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MenuRepository;
use App\Repositories\PageHomeRepository;
use App\Repositories\PageContactRepository;
use A17\Twill\Repositories\SettingRepository;

class PageController extends Controller
{
    public function __construct(SettingRepository $setting, MenuRepository $menu)
    {
        $this->setting = $setting;
        $this->menu = $menu;
    }

    public function compose(View $view)
    {
        if ($view->getName() === 'layouts.app') {
            $view->with('setting', $this->setting);
        }

        if ($view->getName() === 'partials.header') {
            $view->with('setting', $this->setting);
            $view->with('menu', $this->menu);
        }

        if ($view->getName() === 'partials.footer') {
            $view->with('setting', $this->setting);
            $view->with('menu', $this->menu);
        }
    }

    public function pageHome(PageHomeRepository $pageHome)
    {
        $repo = $pageHome->first()->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        return view('pages.pageHome', [
            'repo' => $repo,
        ]);
    }

    public function pageContact(PageContactRepository $pageContact)
    {
        $repo = $pageContact->first()->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        return view('pages.pageContact', [
            'repo' => $repo,
        ]);
    }
}
