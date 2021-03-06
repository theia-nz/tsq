<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RelatedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('related')->delete();
        
        \DB::table('related')->insert(array (
            0 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageService',
                'related_id' => 1,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 1,
            ),
            1 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageService',
                'related_id' => 2,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 2,
            ),
            2 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageService',
                'related_id' => 3,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 3,
            ),
            3 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageService',
                'related_id' => 4,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 4,
            ),
            4 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 1,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 1,
            ),
            5 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 2,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 2,
            ),
            6 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 3,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 3,
            ),
            7 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 4,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 4,
            ),
            8 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 5,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 5,
            ),
            9 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 6,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 6,
            ),
            10 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 7,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 7,
            ),
            11 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 8,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 8,
            ),
            12 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 9,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 9,
            ),
            13 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 10,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 10,
            ),
        ));
        
        
    }
}