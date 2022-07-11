<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:44:47',
                'updated_at' => '2022-07-11 04:40:23',
                'published' => 1,
                'title' => 'Residential',
                'description' => NULL,
                'position' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:46:58',
                'updated_at' => '2022-07-11 04:40:38',
                'published' => 1,
                'title' => 'Commercial',
                'description' => NULL,
                'position' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:47:04',
                'updated_at' => '2022-07-11 04:40:59',
                'published' => 1,
                'title' => 'Subdivision',
                'description' => NULL,
                'position' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:47:13',
                'updated_at' => '2022-07-08 03:38:06',
                'published' => 1,
                'title' => 'Project Management',
                'description' => 'Concept Design

Resource Consent Prepare and Application

Building Consent Prepare and Application

Cooperation with Consultants

Cooperation with Construction Works',
                'position' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'deleted_at' => '2022-07-08 03:35:02',
                'created_at' => '2022-07-06 01:39:03',
                'updated_at' => '2022-07-08 03:35:02',
                'published' => 0,
                'title' => 'Service E',
                'description' => NULL,
                'position' => 5,
            ),
        ));
        
        
    }
}