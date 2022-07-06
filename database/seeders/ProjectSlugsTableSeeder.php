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
                'updated_at' => '2022-07-05 22:29:40',
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
                'updated_at' => '2022-07-05 22:29:40',
                'slug' => 'project-a1',
                'locale' => 'en',
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'project_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 01:29:20',
                'slug' => 'project-a2',
                'locale' => 'en',
                'active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'project_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 01:29:55',
                'slug' => 'project-a3',
                'locale' => 'en',
                'active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'project_id' => 4,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 03:54:50',
                'slug' => 'project-b1',
                'locale' => 'en',
                'active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'project_id' => 5,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 03:54:59',
                'slug' => 'project-c1',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}