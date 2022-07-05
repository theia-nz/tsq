<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageAboutSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_about_slugs')->delete();
        
        \DB::table('page_about_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_about_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:22:53',
                'slug' => 'pageabout',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'page_about_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:22:53',
                'slug' => 'about',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}