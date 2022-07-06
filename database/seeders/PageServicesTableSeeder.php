<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_services')->delete();
        
        \DB::table('page_services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 02:00:34',
                'updated_at' => '2022-07-06 02:22:29',
                'published' => 1,
                'title' => 'Services',
                'description' => NULL,
                'header_a' => 'Services',
            ),
        ));
        
        
    }
}