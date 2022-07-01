<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\PageContactRepository;
use App\Models\PageContact;

class PageContactSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (PageContact::count() > 0) {
            return;
        }

        
        
        app(PageContactRepository::class)->create([
            'title' => 'PageContact',
            'description' => '',
            'published' => false,
        ]);
        
    }
}
