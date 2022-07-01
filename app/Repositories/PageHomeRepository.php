<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PageHome;

class PageHomeRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(PageHome $model)
    {
        $this->model = $model;
    }
}
