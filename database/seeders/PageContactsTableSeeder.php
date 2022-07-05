<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_contacts')->delete();
        
        \DB::table('page_contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 03:51:46',
                'updated_at' => '2022-07-05 01:59:23',
                'published' => 0,
                'title' => 'Contact',
                'description' => NULL,
            ),
        ));
        
        
    }
}