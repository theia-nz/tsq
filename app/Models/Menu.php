<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Menu extends Model implements Sortable
{
    use HasPosition, HasNesting;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',

        'link',
        'type',
        'new_tab',
    ];
}
