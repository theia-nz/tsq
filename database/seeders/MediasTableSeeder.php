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
            6 => 
            array (
                'id' => 7,
                'created_at' => '2022-07-05 04:45:18',
                'updated_at' => '2022-07-05 04:45:18',
                'deleted_at' => NULL,
                'uuid' => 'c6385f00-ec8b-43d9-9add-34f17c67bb32/2560x1440.png',
                'alt_text' => '2560x1440',
                'width' => 2560,
                'height' => 1440,
                'caption' => NULL,
                'filename' => '2560x1440.png',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2022-07-05 04:45:18',
                'updated_at' => '2022-07-05 04:45:18',
                'deleted_at' => NULL,
                'uuid' => 'c6385f00-ec8b-43d9-9add-34f17c67bb32/2560x1441.png',
                'alt_text' => '2560x1441',
                'width' => 2560,
                'height' => 1441,
                'caption' => NULL,
                'filename' => '2560x1441.png',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2022-07-05 04:45:18',
                'updated_at' => '2022-07-05 04:45:18',
                'deleted_at' => NULL,
                'uuid' => 'c6385f00-ec8b-43d9-9add-34f17c67bb32/2560x1442.png',
                'alt_text' => '2560x1442',
                'width' => 2560,
                'height' => 1442,
                'caption' => NULL,
                'filename' => '2560x1442.png',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2022-07-05 05:37:16',
                'updated_at' => '2022-07-05 05:37:16',
                'deleted_at' => NULL,
                'uuid' => 'b2356aa6-b3cc-48d8-87b6-151607f1cd3e/icon-angle-left.png',
                'alt_text' => 'Icon Angle Left',
                'width' => 9,
                'height' => 18,
                'caption' => NULL,
                'filename' => 'icon-angle-left.png',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2022-07-05 05:37:16',
                'updated_at' => '2022-07-05 05:37:16',
                'deleted_at' => NULL,
                'uuid' => 'b2356aa6-b3cc-48d8-87b6-151607f1cd3e/icon-angle-right.png',
                'alt_text' => 'Icon Angle Right',
                'width' => 9,
                'height' => 18,
                'caption' => NULL,
                'filename' => 'icon-angle-right.png',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => '2022-07-05 05:37:16',
                'updated_at' => '2022-07-05 05:37:16',
                'deleted_at' => NULL,
                'uuid' => 'b2356aa6-b3cc-48d8-87b6-151607f1cd3e/icon-angle-up.png',
                'alt_text' => 'Icon Angle Up',
                'width' => 18,
                'height' => 9,
                'caption' => NULL,
                'filename' => 'icon-angle-up.png',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => '2022-07-05 05:37:16',
                'updated_at' => '2022-07-05 05:37:16',
                'deleted_at' => NULL,
                'uuid' => 'b2356aa6-b3cc-48d8-87b6-151607f1cd3e/icon-bars.png',
                'alt_text' => 'Icon Bars',
                'width' => 29,
                'height' => 22,
                'caption' => NULL,
                'filename' => 'icon-bars.png',
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => '2022-07-05 05:47:55',
                'updated_at' => '2022-07-05 05:49:55',
                'deleted_at' => '2022-07-05 05:49:55',
                'uuid' => '0bd56b51-51f5-46bc-8fe0-550d9e5454fb/icon-xmark.svg',
                'alt_text' => 'Icon Xmark',
                'width' => 0,
                'height' => 0,
                'caption' => NULL,
                'filename' => 'icon-xmark.svg',
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => '2022-07-05 05:50:00',
                'updated_at' => '2022-07-05 05:50:04',
                'deleted_at' => '2022-07-05 05:50:04',
                'uuid' => '2fb602a3-578f-4502-ab8f-8d1331ea3d4f/icon-xmark.svg',
                'alt_text' => 'Icon Xmark',
                'width' => 0,
                'height' => 0,
                'caption' => NULL,
                'filename' => 'icon-xmark.svg',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => '2022-07-05 05:50:15',
                'updated_at' => '2022-07-05 05:51:01',
                'deleted_at' => '2022-07-05 05:51:01',
                'uuid' => '4161d778-9b13-4569-b0fb-8769055ea754/icon-xmark.svg',
                'alt_text' => 'Icon Xmark',
                'width' => 0,
                'height' => 0,
                'caption' => NULL,
                'filename' => 'icon-xmark.svg',
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => '2022-07-05 05:51:05',
                'updated_at' => '2022-07-05 05:52:23',
                'deleted_at' => '2022-07-05 05:52:23',
                'uuid' => 'd39a9dd4-1093-43d7-bedf-9ff856ba99c3/icon-xmark.svg',
                'alt_text' => 'Icon Xmark',
                'width' => 0,
                'height' => 0,
                'caption' => NULL,
                'filename' => 'icon-xmark.svg',
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => '2022-07-05 05:52:26',
                'updated_at' => '2022-07-05 05:53:27',
                'deleted_at' => '2022-07-05 05:53:27',
                'uuid' => 'dcadc78b-2f99-4d78-ab84-cee8fe0f9e70/icon-xmark.png',
                'alt_text' => 'Icon Xmark',
                'width' => 54,
                'height' => 54,
                'caption' => NULL,
                'filename' => 'icon-xmark.png',
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => '2022-07-05 05:53:35',
                'updated_at' => '2022-07-05 05:55:34',
                'deleted_at' => '2022-07-05 05:55:34',
                'uuid' => '29565f15-f72c-4217-82b1-b5361f16e748/icon-xmark.png',
                'alt_text' => 'Icon Xmark',
                'width' => 54,
                'height' => 54,
                'caption' => NULL,
                'filename' => 'icon-xmark.png',
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => '2022-07-05 05:55:37',
                'updated_at' => '2022-07-05 05:55:37',
                'deleted_at' => NULL,
                'uuid' => '2dc997de-d9ea-4909-bc8a-78a6d899a0a4/icon-xmark.png',
                'alt_text' => 'Icon Xmark',
                'width' => 30,
                'height' => 30,
                'caption' => NULL,
                'filename' => 'icon-xmark.png',
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => '2022-07-05 05:58:57',
                'updated_at' => '2022-07-05 05:58:57',
                'deleted_at' => NULL,
                'uuid' => '2bef3a99-60f7-4920-8964-6d6aada8e0fe/icon-phone.png',
                'alt_text' => 'Icon Phone',
                'width' => 13,
                'height' => 18,
                'caption' => NULL,
                'filename' => 'icon-phone.png',
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => '2022-07-05 05:58:57',
                'updated_at' => '2022-07-05 05:58:57',
                'deleted_at' => NULL,
                'uuid' => '2bef3a99-60f7-4920-8964-6d6aada8e0fe/icon-envelope.png',
                'alt_text' => 'Icon Envelope',
                'width' => 19,
                'height' => 12,
                'caption' => NULL,
                'filename' => 'icon-envelope.png',
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => '2022-07-05 05:58:57',
                'updated_at' => '2022-07-05 05:58:57',
                'deleted_at' => NULL,
                'uuid' => '2bef3a99-60f7-4920-8964-6d6aada8e0fe/icon-facebook.png',
                'alt_text' => 'Icon Facebook',
                'width' => 10,
                'height' => 18,
                'caption' => NULL,
                'filename' => 'icon-facebook.png',
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => '2022-07-05 23:10:12',
                'updated_at' => '2022-07-05 23:10:12',
                'deleted_at' => NULL,
                'uuid' => '4c3b6203-4349-4dfc-94ae-ea22aa98b0e3/entrance-picture.jpg',
                'alt_text' => 'Entrance Picture',
                'width' => 3456,
                'height' => 2304,
                'caption' => NULL,
                'filename' => 'Entrance-Picture.jpg',
            ),
        ));
        
        
    }
}