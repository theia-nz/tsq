<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PageContact;

class PageContactRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(PageContact $model)
    {
        $this->model = $model;
    }
}
