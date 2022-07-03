<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mediables')->delete();
        
        \DB::table('mediables')->insert(array (
            0 => 
            array (
                'id' => 49,
                'created_at' => '2022-07-01 00:36:22',
                'updated_at' => '2022-07-01 00:36:22',
                'deleted_at' => NULL,
                'mediable_id' => 2,
                'mediable_type' => 'A17\\Twill\\Models\\Setting',
                'media_id' => 1,
                'crop_x' => 0,
                'crop_y' => 32,
                'crop_w' => 80,
                'crop_h' => 45,
                'role' => 'company_logo',
                'crop' => 'default',
                'lqip_data' => NULL,
                'ratio' => 'default',
                'metadatas' => '{"video": null, "altText": null, "caption": null}',
                'locale' => 'en',
            ),
            1 => 
            array (
                'id' => 50,
                'created_at' => '2022-07-01 00:36:22',
                'updated_at' => '2022-07-01 00:36:22',
                'deleted_at' => NULL,
                'mediable_id' => 2,
                'mediable_type' => 'A17\\Twill\\Models\\Setting',
                'media_id' => 1,
                'crop_x' => 0,
                'crop_y' => 0,
                'crop_w' => 78,
                'crop_h' => 78,
                'role' => 'company_logo',
                'crop' => 'mobile',
                'lqip_data' => NULL,
                'ratio' => 'mobile',
                'metadatas' => '{"video": null, "altText": null, "caption": null}',
                'locale' => 'en',
            ),
            2 => 
            array (
                'id' => 51,
                'created_at' => '2022-07-01 00:36:22',
                'updated_at' => '2022-07-01 00:36:22',
                'deleted_at' => NULL,
                'mediable_id' => 2,
                'mediable_type' => 'A17\\Twill\\Models\\Setting',
                'media_id' => 1,
                'crop_x' => 0,
                'crop_y' => 0,
                'crop_w' => 80,
                'crop_h' => 78,
                'role' => 'company_logo',
                'crop' => 'flexible',
                'lqip_data' => NULL,
                'ratio' => 'free',
                'metadatas' => '{"video": null, "altText": null, "caption": null}',
                'locale' => 'en',
            ),
            3 => 
            array (
                'id' => 52,
                'created_at' => '2022-07-01 00:36:22',
                'updated_at' => '2022-07-01 00:36:22',
                'deleted_at' => NULL,
                'mediable_id' => 3,
                'mediable_type' => 'A17\\Twill\\Models\\Setting',
                'media_id' => 1,
                'crop_x' => 0,
                'crop_y' => 32,
                'crop_w' => 80,
                'crop_h' => 45,
                'role' => 'company_favicon',
                'crop' => 'default',
                'lqip_data' => NULL,
                'ratio' => 'default',
                'metadatas' => '{"video": null, "altText": null, "caption": null}',
                'locale' => 'en',
            ),
            4 => 
            array (
                'id' => 53,
                'created_at' => '2022-07-01 00:36:22',
                'updated_at' => '2022-07-01 00:36:22',
                'deleted_at' => NULL,
                'mediable_id' => 3,
                'mediable_type' => 'A17\\Twill\\Models\\Setting',
                'media_id' => 1,
                'crop_x' => 0,
                'crop_y' => 0,
                'crop_w' => 78,
                'crop_h' => 78,
                'role' => 'company_favicon',
                'crop' => 'mobile',
                'lqip_data' => NULL,
                'ratio' => 'mobile',
                'metadatas' => '{"video": null, "altText": null, "caption": null}',
                'locale' => 'en',
            ),
            5 => 
            array (
                'id' => 54,
                'created_at' => '2022-07-01 00:36:22',
                'updated_at' => '2022-07-01 00:36:22',
                'deleted_at' => NULL,
                'mediable_id' => 3,
                'mediable_type' => 'A17\\Twill\\Models\\Setting',
                'media_id' => 1,
                'crop_x' => 0,
                'crop_y' => 0,
                'crop_w' => 80,
                'crop_h' => 78,
                'role' => 'company_favicon',
                'crop' => 'flexible',
                'lqip_data' => NULL,
                'ratio' => 'free',
                'metadatas' => '{"video": null, "altText": null, "caption": null}',
                'locale' => 'en',
            ),
        ));
        
        
    }
}