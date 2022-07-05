<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageHomeSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_home_slugs')->delete();
        
        \DB::table('page_home_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_home_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 03:54:34',
                'slug' => 'pagehome',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'page_home_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 03:54:34',
                'slug' => 'home',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}