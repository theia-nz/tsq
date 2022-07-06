<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PageService;

class PageServiceRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    protected $relatedBrowsers = ['services'];

    public function __construct(PageService $model)
    {
        $this->model = $model;
    }
}
