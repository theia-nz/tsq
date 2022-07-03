<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2022-07-01 00:06:19',
                'updated_at' => '2022-07-01 00:06:19',
                'deleted_at' => NULL,
                'key' => 'company_name',
                'section' => 'company',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2022-07-01 00:06:19',
                'updated_at' => '2022-07-01 00:06:19',
                'deleted_at' => NULL,
                'key' => 'company_logo',
                'section' => 'company',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2022-07-01 00:06:19',
                'updated_at' => '2022-07-01 00:06:19',
                'deleted_at' => NULL,
                'key' => 'company_favicon',
                'section' => 'company',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'company_facebook',
                'section' => 'company',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'new_zealand_branch_name',
                'section' => 'company',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'new_zealand_branch_address',
                'section' => 'company',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'new_zealand_branch_latitude',
                'section' => 'company',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'new_zealand_branch_longitude',
                'section' => 'company',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'new_zealand_branch_phone',
                'section' => 'company',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'new_zealand_branch_email',
                'section' => 'company',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'china_branch_name',
                'section' => 'company',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'china_branch_address',
                'section' => 'company',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'china_branch_latitude',
                'section' => 'company',
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'china_branch_longitude',
                'section' => 'company',
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'china_branch_phone',
                'section' => 'company',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => '2022-07-01 00:31:05',
                'updated_at' => '2022-07-01 00:31:05',
                'deleted_at' => NULL,
                'key' => 'china_branch_email',
                'section' => 'company',
            ),
        ));
        
        
    }
}