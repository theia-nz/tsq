<?php

namespace App\Repositories;

use App\Models\FormContact;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;

class FormContactRepository extends ModuleRepository
{
    use HandleMedias, HandleJsonRepeaters;

    protected array $jsonRepeaters = [
        'recipients'
    ];

    public function __construct(FormContact $model)
    {
        $this->model = $model;
    }
}
