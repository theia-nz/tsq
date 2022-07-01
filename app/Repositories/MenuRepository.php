<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Menu;

class MenuRepository extends ModuleRepository
{
    use HandleNesting;

    public function __construct(Menu $model)
    {
        $this->model = $model;
    }
}
