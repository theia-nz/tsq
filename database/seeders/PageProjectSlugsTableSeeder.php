<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageProjectSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_project_slugs')->delete();
        
        \DB::table('page_project_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:23:09',
                'slug' => 'pageproject',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'page_project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-05 02:23:09',
                'slug' => 'projects',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}