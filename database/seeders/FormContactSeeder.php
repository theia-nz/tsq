<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\FormContactRepository;
use App\Models\FormContact;

class FormContactSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (FormContact::count() > 0) {
            return;
        }

        
        
        app(FormContactRepository::class)->create([
            'title' => 'FormContact',
            'description' => '',
            'published' => false,
        ]);
        
    }
}
