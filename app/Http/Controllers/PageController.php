<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MenuRepository;
use App\Repositories\PageHomeRepository;
use App\Repositories\PageAboutRepository;
use App\Repositories\PageContactRepository;
use App\Repositories\PageProjectRepository;
use App\Repositories\PageServiceRepository;
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
        $repo = $pageHome->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        return view('pages.pageHome', [
            'repo' => $repo,
            'setting' => $this->setting,
        ]);
    }

    public function pageAbout(PageAboutRepository $pageAbout)
    {
        $repo = $pageAbout->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        return view('pages.pageAbout', [
            'repo' => $repo,
            'setting' => $this->setting,
        ]);
    }

    public function pageService(PageServiceRepository $pageService)
    {
        $repo = $pageService->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        return view('pages.pageService', [
            'repo' => $repo,
        ]);
    }

    public function pageProject(PageProjectRepository $pageProject)
    {
        $repo = $pageProject->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        return view('pages.pageProject', [
            'repo' => $repo,
        ]);
    }

    public function pageContact(PageContactRepository $pageContact)
    {
        $repo = $pageContact->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        return view('pages.pageContact', [
            'repo' => $repo,
            'setting' => $this->setting,
        ]);
    }

    public function service($slug)
    {
        $repo = Service::whereHas('slugs', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        $projects = Project::whereHas('relatedItems', function ($relatedItem) use ($repo) {
            $relatedItem->where('related_type', 'App\Models\Service')->where('related_id', $repo->id);
        })->where('published', 1)->get();

        if (!$projects->count()) {
            return redirect()->route('home');
        }

        return view('pages.service', [
            'repo' => $repo,
        ]);
    }

    public function project($slug)
    {
        $repo = Project::whereHas('slugs', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->where('published', 1)->first();

        if (!$repo) {
            abort(404);
        }

        $prevRepo = Project::where('id', '<', $repo->id)->where('published', 1)->first();

        $nextRepo = Project::where('id', '>', $repo->id)->where('published', 1)->first();

        return view('pages.project', [
            'repo' => $repo,
            'prevRepo' => $prevRepo,
            'nextRepo' => $nextRepo,
            'setting' => $this->setting,
        ]);
    }
}
