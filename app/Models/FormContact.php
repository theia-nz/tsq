<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class FormContact extends Model
{
    use HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',

        'form_title',
        'label_name',
        'error_name',
        'label_phone',
        'error_phone',
        'label_email',
        'error_email_1',
        'error_email_2',
        'label_message',
        'error_message',
        'error_recaptcha',
        'label_submit',
        'message_success',
        'message_failure',
        'recipients',
    ];

    protected $casts = [
        'recipients' => 'array',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];
}
