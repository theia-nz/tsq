<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\PageServiceRepository;
use App\Models\PageService;

class PageServiceSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (PageService::count() > 0) {
            return;
        }

        
        
        app(PageServiceRepository::class)->create([
            'title' => 'PageService',
            'description' => '',
            'published' => false,
        ]);
        
    }
}
