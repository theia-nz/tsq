<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PageAbout;

class PageAboutRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(PageAbout $model)
    {
        $this->model = $model;
    }
}
