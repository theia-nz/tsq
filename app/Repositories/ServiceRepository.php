<?php

namespace App\Repositories;

use App\Models\Service;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;

class ServiceRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleJsonRepeaters;

    protected array $jsonRepeaters = [
        'items'
    ];

    public function __construct(Service $model)
    {
        $this->model = $model;
    }
}
