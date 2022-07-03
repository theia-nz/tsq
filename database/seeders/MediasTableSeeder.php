<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medias')->delete();
        
        \DB::table('medias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2022-07-01 00:06:04',
                'updated_at' => '2022-07-01 00:06:04',
                'deleted_at' => NULL,
                'uuid' => '316997a5-c87e-458d-b0c1-d3600071150b/group-6.png',
                'alt_text' => 'Group 6',
                'width' => 80,
                'height' => 78,
                'caption' => NULL,
                'filename' => 'Group-6.png',
            ),
        ));
        
        
    }
}