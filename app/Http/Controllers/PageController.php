<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MenuRepository;
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
}
