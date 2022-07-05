<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting_translations')->delete();
        
        \DB::table('setting_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'setting_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:06:19',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => 'TSQ Architectural Design Group',
            ),
            1 => 
            array (
                'id' => 2,
                'setting_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => 'https://facebook.com',
            ),
            2 => 
            array (
                'id' => 3,
                'setting_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => 'New Zealand Head Office',
            ),
            3 => 
            array (
                'id' => 4,
                'setting_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '2/4 Goodman Place
Penrose
Auckland 1061
New Zealand',
            ),
            4 => 
            array (
                'id' => 5,
                'setting_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '-36.920070',
            ),
            5 => 
            array (
                'id' => 6,
                'setting_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '174.806390',
            ),
            6 => 
            array (
                'id' => 7,
                'setting_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '099280086',
            ),
            7 => 
            array (
                'id' => 8,
                'setting_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => 'admin@tsq.co.nz',
            ),
            8 => 
            array (
                'id' => 9,
                'setting_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => 'China Head Office',
            ),
            9 => 
            array (
                'id' => 10,
                'setting_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '188 Huaguang Road
Zhangdian District
Zibo 255000
Shangdong
China',
            ),
            10 => 
            array (
                'id' => 11,
                'setting_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '36.8225',
            ),
            11 => 
            array (
                'id' => 12,
                'setting_id' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '118.01051',
            ),
            12 => 
            array (
                'id' => 13,
                'setting_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => '099280086',
            ),
            13 => 
            array (
                'id' => 14,
                'setting_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:31:06',
                'updated_at' => '2022-07-04 22:31:09',
                'locale' => 'en',
                'active' => 1,
                'value' => 'admin@tsq.co.nz',
            ),
        ));
        
        
    }
}