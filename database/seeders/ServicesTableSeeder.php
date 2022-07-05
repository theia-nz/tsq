<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:44:47',
                'updated_at' => '2022-07-05 02:29:25',
                'published' => 1,
                'title' => 'Service A',
                'description' => NULL,
                'position' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:46:58',
                'updated_at' => '2022-07-05 02:33:28',
                'published' => 1,
                'title' => 'Service B',
                'description' => NULL,
                'position' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:47:04',
                'updated_at' => '2022-07-05 01:27:45',
                'published' => 0,
                'title' => 'Service C',
                'description' => NULL,
                'position' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 00:47:13',
                'updated_at' => '2022-07-05 02:44:31',
                'published' => 0,
                'title' => 'Service D',
                'description' => '<p>Vestibulum ac diam sit amet quam vehicula elemen<strong>T</strong>um sed <strong>S</strong>it amet dui. <strong>Q</strong>uisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>',
                'position' => 4,
            ),
        ));
        
        
    }
}