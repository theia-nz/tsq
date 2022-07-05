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
                'subject_id' => 2,
                'subject_type' => 'App\\Models\\Project',
                'related_id' => 1,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 1,
            ),
            1 => 
            array (
                'subject_id' => 3,
                'subject_type' => 'App\\Models\\Project',
                'related_id' => 1,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 1,
            ),
            2 => 
            array (
                'subject_id' => 4,
                'subject_type' => 'App\\Models\\Project',
                'related_id' => 2,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 1,
            ),
            3 => 
            array (
                'subject_id' => 5,
                'subject_type' => 'App\\Models\\Project',
                'related_id' => 3,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 1,
            ),
            4 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\Project',
                'related_id' => 1,
                'related_type' => 'App\\Models\\Service',
                'browser_name' => 'services',
                'position' => 1,
            ),
            5 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 1,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 1,
            ),
            6 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 4,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 2,
            ),
            7 => 
            array (
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'related_id' => 5,
                'related_type' => 'App\\Models\\Project',
                'browser_name' => 'projects',
                'position' => 3,
            ),
        ));
        
        
    }
}