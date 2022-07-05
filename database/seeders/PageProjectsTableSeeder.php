<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_projects')->delete();
        
        \DB::table('page_projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 02:01:53',
                'updated_at' => '2022-07-05 02:02:12',
                'published' => 0,
                'title' => 'Projects',
                'description' => NULL,
            ),
        ));
        
        
    }
}