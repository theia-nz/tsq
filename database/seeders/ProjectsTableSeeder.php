<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 01:06:55',
                'updated_at' => '2022-07-05 22:29:40',
                'published' => 1,
                'title' => 'Project A1',
                'description' => 'This is project a1.',
                'position' => 1,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 01:26:48',
                'updated_at' => '2022-07-05 02:35:19',
                'published' => 1,
                'title' => 'Project A2',
                'description' => 'This is project a2.',
                'position' => 2,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 01:29:31',
                'updated_at' => '2022-07-07 03:34:43',
                'published' => 1,
                'title' => 'Project A3',
                'description' => 'This is project a3.',
                'position' => 3,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 01:30:04',
                'updated_at' => '2022-07-06 02:15:51',
                'published' => 1,
                'title' => 'Project B1',
                'description' => 'This is project b1.',
                'position' => 4,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 01:30:32',
                'updated_at' => '2022-07-06 02:15:52',
                'published' => 1,
                'title' => 'Project C1',
                'description' => 'This is project c1.',
                'position' => 5,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
        ));
        
        
    }
}