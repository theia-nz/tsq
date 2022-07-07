<?php
namespace App\Http\Controllers\Admin;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;
class FormContactController extends BaseModuleController
{
    protected $moduleName = 'formContacts';
    protected $indexOptions = [
        'permalink' => false,
    ];
}
