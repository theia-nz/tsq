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
            1 => 
            array (
                'id' => 2,
                'created_at' => '2022-07-04 22:31:07',
                'updated_at' => '2022-07-04 22:31:07',
                'deleted_at' => NULL,
                'uuid' => '6a0754b9-53d7-40dd-a21d-04e861ade3be/logo-updated-226028.png',
                'alt_text' => 'Logo Updated 2260 28',
                'width' => 1430,
                'height' => 390,
                'caption' => NULL,
                'filename' => 'Logo Updated_22.60.28.png',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2022-07-05 00:39:02',
                'updated_at' => '2022-07-05 00:39:02',
                'deleted_at' => NULL,
                'uuid' => '9cd3a389-d81d-46d7-863f-3e52db004cfd/4000x3999.png',
                'alt_text' => '4000x3999',
                'width' => 4000,
                'height' => 3999,
                'caption' => NULL,
                'filename' => '4000x3999.png',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2022-07-05 01:08:00',
                'updated_at' => '2022-07-05 01:08:00',
                'deleted_at' => NULL,
                'uuid' => 'f35c6a36-6d5b-42b2-9fa0-fff02924a40d/4000x3998.png',
                'alt_text' => '4000x3998',
                'width' => 4000,
                'height' => 3998,
                'caption' => NULL,
                'filename' => '4000x3998.png',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2022-07-05 01:08:00',
                'updated_at' => '2022-07-05 01:08:00',
                'deleted_at' => NULL,
                'uuid' => 'f35c6a36-6d5b-42b2-9fa0-fff02924a40d/4000x3997.png',
                'alt_text' => '4000x3997',
                'width' => 4000,
                'height' => 3997,
                'caption' => NULL,
                'filename' => '4000x3997.png',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2022-07-05 02:49:56',
                'updated_at' => '2022-07-05 02:49:56',
                'deleted_at' => NULL,
                'uuid' => '4fc2bf4c-8180-4fb4-bf6e-65dcb6ec4ce6/layer-1.png',
                'alt_text' => 'Layer 1',
                'width' => 1920,
                'height' => 1080,
                'caption' => NULL,
                'filename' => 'Layer-1.png',
            ),
        ));
        
        
    }
}