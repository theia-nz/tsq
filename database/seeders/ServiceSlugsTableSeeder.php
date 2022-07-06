<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service_slugs')->delete();
        
        \DB::table('service_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'service_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:29:25',
                'slug' => 'residential',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'service_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:33:28',
                'slug' => 'commercial',
                'locale' => 'en',
                'active' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'service_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 01:27:45',
                'slug' => 'subdivision',
                'locale' => 'en',
                'active' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'service_id' => 4,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 02:00:50',
                'slug' => 'project-management',
                'locale' => 'en',
                'active' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'service_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:29:25',
                'slug' => 'service-a',
                'locale' => 'en',
                'active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'service_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:33:28',
                'slug' => 'service-b',
                'locale' => 'en',
                'active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'service_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 01:27:45',
                'slug' => 'service-c',
                'locale' => 'en',
                'active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'service_id' => 4,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 02:00:50',
                'slug' => 'service-d',
                'locale' => 'en',
                'active' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'service_id' => 5,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 01:39:03',
                'slug' => 'service-e',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}