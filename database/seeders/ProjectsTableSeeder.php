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
                'updated_at' => '2022-07-08 07:04:02',
                'published' => 1,
                'title' => 'Philson Terrace Browns Bay',
                'description' => 'Philson Terrace Browns Bay',
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
                'updated_at' => '2022-07-08 03:38:22',
                'published' => 1,
                'title' => 'Clayburn Road Gend Eden',
                'description' => 'Clayburn Road Gend Eden',
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
                'updated_at' => '2022-07-08 03:38:35',
                'published' => 1,
                'title' => 'Edmonton Residence Development',
                'description' => 'Edmonton Residence Development',
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
                'updated_at' => '2022-07-08 03:38:39',
                'published' => 1,
                'title' => 'Beach Road Browns Bay',
                'description' => 'Beach Road Browns Bay',
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
                'updated_at' => '2022-07-08 03:38:47',
                'published' => 1,
                'title' => 'Marriott Road Pakuranga Heights',
                'description' => 'Marriott Road Pakuranga Heights',
                'position' => 5,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 03:30:43',
                'updated_at' => '2022-07-08 03:31:47',
                'published' => 1,
                'title' => 'Springbank Lane Te Atatu Peninsula',
                'description' => 'Springbank Lane Te Atatu Peninsula',
                'position' => 6,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 03:31:58',
                'updated_at' => '2022-07-08 03:32:32',
                'published' => 1,
                'title' => 'Yeovil Road Te Atatu Peninsula',
                'description' => 'Yeovil Road Te Atatu Peninsula',
                'position' => 7,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 03:32:38',
                'updated_at' => '2022-07-08 03:33:10',
                'published' => 1,
                'title' => 'Princes Street West Pukekohe',
                'description' => 'Princes Street West Pukekohe',
                'position' => 8,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 03:33:18',
                'updated_at' => '2022-07-08 03:34:04',
                'published' => 1,
                'title' => 'Rangeview Road Sunnyvale',
                'description' => 'Rangeview Road Sunnyvale',
                'position' => 9,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 03:34:16',
                'updated_at' => '2022-07-08 03:34:31',
                'published' => 1,
                'title' => 'Sorrel Crescent Half Moon Bay',
                'description' => 'Sorrel Crescent Half Moon Bay',
                'position' => 10,
                'location' => NULL,
                'year' => NULL,
                'client' => NULL,
            ),
        ));
        
        
    }
}