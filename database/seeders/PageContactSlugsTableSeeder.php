<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageContactSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_contact_slugs')->delete();
        
        \DB::table('page_contact_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_contact_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-01 04:01:32',
                'slug' => 'pagecontact',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'page_contact_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-01 04:01:32',
                'slug' => 'contact',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}