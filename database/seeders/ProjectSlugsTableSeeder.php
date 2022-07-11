<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_slugs')->delete();
        
        \DB::table('project_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:12',
                'slug' => 'project-a',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:12',
                'slug' => 'project-a1',
                'locale' => 'en',
                'active' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'project_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:53',
                'slug' => 'project-a2',
                'locale' => 'en',
                'active' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'project_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:33:28',
                'slug' => 'project-a3',
                'locale' => 'en',
                'active' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'project_id' => 4,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:28',
                'slug' => 'project-b1',
                'locale' => 'en',
                'active' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'project_id' => 5,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:59',
                'slug' => 'project-c1',
                'locale' => 'en',
                'active' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:12',
                'slug' => 'philson-terrace-browns-bay',
                'locale' => 'en',
                'active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'project_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:53',
                'slug' => 'clayburn-road-gend-eden',
                'locale' => 'en',
                'active' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'project_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:33:28',
                'slug' => 'edmonton-residence-development',
                'locale' => 'en',
                'active' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'project_id' => 4,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:28',
                'slug' => 'beach-road-browns-bay',
                'locale' => 'en',
                'active' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'project_id' => 5,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:59',
                'slug' => 'marriott-road-pakuranga-heights',
                'locale' => 'en',
                'active' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'project_id' => 6,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:36:25',
                'slug' => 'springbank-lane-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'project_id' => 7,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:36:50',
                'slug' => 'yeovil-road-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'project_id' => 8,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:37:45',
                'slug' => 'princes-street-west-pukekohe',
                'locale' => 'en',
                'active' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'project_id' => 9,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:38:40',
                'slug' => 'rangeview-road-sunnyvale',
                'locale' => 'en',
                'active' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'project_id' => 10,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:38:55',
                'slug' => 'sorrel-crescent-half-moon-bay',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}