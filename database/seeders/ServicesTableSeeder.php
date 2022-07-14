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
                'items' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:46:58',
                'updated_at' => '2022-07-13 07:41:02',
                'published' => 1,
                'title' => 'Commercial',
                'description' => NULL,
                'position' => 2,
                'items' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:47:04',
                'updated_at' => '2022-07-13 07:41:46',
                'published' => 1,
                'title' => 'Subdivision',
                'description' => NULL,
                'position' => 3,
                'items' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:47:13',
                'updated_at' => '2022-07-14 01:34:31',
                'published' => 1,
                'title' => 'Project Management',
                'description' => NULL,
                'position' => 4,
                'items' => '[{"id": 1657762405575, "name": "Concept Design", "blocks": [], "medias": [], "browsers": []}, {"id": 1657762417392, "name": "Resource Consent\\nPrepare and Application", "blocks": [], "medias": [], "browsers": []}, {"id": 1657762419688, "name": "Building Consent\\nPrepare and Application", "blocks": [], "medias": [], "browsers": []}, {"id": 1657762421359, "name": "Cooperation with\\nConsultants", "blocks": [], "medias": [], "browsers": []}, {"id": 1657762456705, "name": "Cooperation with\\nConstruction Works", "blocks": [], "medias": [], "browsers": []}]',
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
                'items' => NULL,
            ),
        ));
        
        
    }
}