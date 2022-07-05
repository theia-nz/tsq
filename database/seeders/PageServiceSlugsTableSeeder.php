<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageServiceSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_service_slugs')->delete();
        
        \DB::table('page_service_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_service_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:23:02',
                'slug' => 'pageservice',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'page_service_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:23:02',
                'slug' => 'service',
                'locale' => 'en',
                'active' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'page_service_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:23:02',
                'slug' => 'services',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}