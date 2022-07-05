<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\PageProjectRepository;
use App\Models\PageProject;

class PageProjectSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (PageProject::count() > 0) {
            return;
        }

        
        
        app(PageProjectRepository::class)->create([
            'title' => 'PageProject',
            'description' => '',
            'published' => false,
        ]);
        
    }
}
