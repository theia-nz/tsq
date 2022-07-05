<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageAboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_abouts')->delete();
        
        \DB::table('page_abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 01:58:47',
                'updated_at' => '2022-07-05 02:22:53',
                'published' => 1,
                'title' => 'About',
                'description' => NULL,
            ),
        ));
        
        
    }
}