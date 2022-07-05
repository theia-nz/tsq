<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\PageAboutRepository;
use App\Models\PageAbout;

class PageAboutSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (PageAbout::count() > 0) {
            return;
        }

        
        
        app(PageAboutRepository::class)->create([
            'title' => 'PageAbout',
            'description' => '',
            'published' => false,
        ]);
        
    }
}
