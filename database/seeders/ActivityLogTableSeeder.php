<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivityLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_log')->delete();
        
        \DB::table('activity_log')->insert(array (
            0 => 
            array (
                'id' => 1,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:44:27',
                'updated_at' => '2022-07-01 00:44:27',
            ),
            1 => 
            array (
                'id' => 2,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:47:11',
                'updated_at' => '2022-07-01 00:47:11',
            ),
            2 => 
            array (
                'id' => 3,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 2,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:47:29',
                'updated_at' => '2022-07-01 00:47:29',
            ),
            3 => 
            array (
                'id' => 4,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 2,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:47:52',
                'updated_at' => '2022-07-01 00:47:52',
            ),
            4 => 
            array (
                'id' => 5,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 2,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:48:08',
                'updated_at' => '2022-07-01 00:48:08',
            ),
            5 => 
            array (
                'id' => 6,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 3,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:48:30',
                'updated_at' => '2022-07-01 00:48:30',
            ),
            6 => 
            array (
                'id' => 7,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 3,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:48:35',
                'updated_at' => '2022-07-01 00:48:35',
            ),
            7 => 
            array (
                'id' => 8,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 4,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:48:44',
                'updated_at' => '2022-07-01 00:48:44',
            ),
            8 => 
            array (
                'id' => 9,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 4,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:48:52',
                'updated_at' => '2022-07-01 00:48:52',
            ),
            9 => 
            array (
                'id' => 10,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 5,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:49:38',
                'updated_at' => '2022-07-01 00:49:38',
            ),
            10 => 
            array (
                'id' => 11,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 5,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:49:57',
                'updated_at' => '2022-07-01 00:49:57',
            ),
            11 => 
            array (
                'id' => 12,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 6,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:50:09',
                'updated_at' => '2022-07-01 00:50:09',
            ),
            12 => 
            array (
                'id' => 13,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 6,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:50:15',
                'updated_at' => '2022-07-01 00:50:15',
            ),
            13 => 
            array (
                'id' => 14,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 7,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:50:28',
                'updated_at' => '2022-07-01 00:50:28',
            ),
            14 => 
            array (
                'id' => 15,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 7,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:50:36',
                'updated_at' => '2022-07-01 00:50:36',
            ),
            15 => 
            array (
                'id' => 16,
                'log_name' => 'default',
                'description' => 'created',
                'subject_id' => 8,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:51:10',
                'updated_at' => '2022-07-01 00:51:10',
            ),
            16 => 
            array (
                'id' => 17,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 8,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 00:51:14',
                'updated_at' => '2022-07-01 00:51:14',
            ),
            17 => 
            array (
                'id' => 18,
                'log_name' => 'default',
                'description' => 'published',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 01:08:05',
                'updated_at' => '2022-07-01 01:08:05',
            ),
            18 => 
            array (
                'id' => 19,
                'log_name' => 'default',
                'description' => 'published',
                'subject_id' => 2,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 02:44:40',
                'updated_at' => '2022-07-01 02:44:40',
            ),
            19 => 
            array (
                'id' => 20,
                'log_name' => 'default',
                'description' => 'published',
                'subject_id' => 3,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 02:44:41',
                'updated_at' => '2022-07-01 02:44:41',
            ),
            20 => 
            array (
                'id' => 21,
                'log_name' => 'default',
                'description' => 'published',
                'subject_id' => 4,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 02:44:43',
                'updated_at' => '2022-07-01 02:44:43',
            ),
            21 => 
            array (
                'id' => 22,
                'log_name' => 'default',
                'description' => 'published',
                'subject_id' => 8,
                'subject_type' => 'App\\Models\\Menu',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 02:44:45',
                'updated_at' => '2022-07-01 02:44:45',
            ),
            22 => 
            array (
                'id' => 23,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 03:51:58',
                'updated_at' => '2022-07-01 03:51:58',
            ),
            23 => 
            array (
                'id' => 24,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageContact',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 03:52:07',
                'updated_at' => '2022-07-01 03:52:07',
            ),
            24 => 
            array (
                'id' => 25,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 03:52:16',
                'updated_at' => '2022-07-01 03:52:16',
            ),
            25 => 
            array (
                'id' => 26,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageHome',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 04:00:27',
                'updated_at' => '2022-07-01 04:00:27',
            ),
            26 => 
            array (
                'id' => 27,
                'log_name' => 'default',
                'description' => 'updated',
                'subject_id' => 1,
                'subject_type' => 'App\\Models\\PageContact',
                'event' => NULL,
                'causer_id' => 1,
                'causer_type' => 'users',
                'properties' => '[]',
                'batch_uuid' => NULL,
                'created_at' => '2022-07-01 04:01:32',
                'updated_at' => '2022-07-01 04:01:32',
            ),
        ));
        
        
    }
}