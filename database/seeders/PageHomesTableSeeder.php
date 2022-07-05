<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageHomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_homes')->delete();
        
        \DB::table('page_homes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 03:48:32',
                'updated_at' => '2022-07-05 03:54:34',
                'published' => 1,
                'title' => 'Home',
                'description' => NULL,
            ),
        ));
        
        
    }
}