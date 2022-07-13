<?php

namespace App\Repositories;

use App\Models\PageAbout;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;

class PageAboutRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleJsonRepeaters;

    protected array $jsonRepeaters = [
        'sentences'
    ];

    public function __construct(PageAbout $model)
    {
        $this->model = $model;
    }
}
