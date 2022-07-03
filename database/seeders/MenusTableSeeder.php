<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:44:27',
                'updated_at' => '2022-07-01 01:08:05',
                'published' => 1,
                'title' => 'Home',
                'description' => NULL,
                'position' => 0,
                '_lft' => 1,
                '_rgt' => 2,
                'parent_id' => NULL,
                'link' => 'home',
                'type' => 'internal',
                'new_tab' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:47:29',
                'updated_at' => '2022-07-01 02:44:40',
                'published' => 1,
                'title' => 'About',
                'description' => NULL,
                'position' => 1,
                '_lft' => 3,
                '_rgt' => 4,
                'parent_id' => NULL,
                'link' => 'about',
                'type' => 'internal',
                'new_tab' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:48:30',
                'updated_at' => '2022-07-01 02:44:41',
                'published' => 1,
                'title' => 'Services',
                'description' => NULL,
                'position' => 2,
                '_lft' => 5,
                '_rgt' => 6,
                'parent_id' => NULL,
                'link' => 'services',
                'type' => 'internal',
                'new_tab' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:48:44',
                'updated_at' => '2022-07-01 02:44:43',
                'published' => 1,
                'title' => 'Projects',
                'description' => NULL,
                'position' => 3,
                '_lft' => 7,
                '_rgt' => 14,
                'parent_id' => NULL,
                'link' => 'projects',
                'type' => 'internal',
                'new_tab' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:49:38',
                'updated_at' => '2022-07-01 00:50:02',
                'published' => 0,
                'title' => 'Residential',
                'description' => NULL,
                'position' => 0,
                '_lft' => 8,
                '_rgt' => 9,
                'parent_id' => 4,
                'link' => 'projects/residential',
                'type' => 'internal',
                'new_tab' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:50:09',
                'updated_at' => '2022-07-01 00:50:22',
                'published' => 0,
                'title' => 'Commercial',
                'description' => NULL,
                'position' => 1,
                '_lft' => 10,
                '_rgt' => 11,
                'parent_id' => 4,
                'link' => 'projects/commercial',
                'type' => 'internal',
                'new_tab' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:50:28',
                'updated_at' => '2022-07-01 00:50:40',
                'published' => 0,
                'title' => 'Landscaping',
                'description' => NULL,
                'position' => 2,
                '_lft' => 12,
                '_rgt' => 13,
                'parent_id' => 4,
                'link' => 'projects/landscaping',
                'type' => 'internal',
                'new_tab' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2022-07-01 00:51:10',
                'updated_at' => '2022-07-01 02:44:45',
                'published' => 1,
                'title' => 'Contact',
                'description' => NULL,
                'position' => 4,
                '_lft' => 15,
                '_rgt' => 16,
                'parent_id' => NULL,
                'link' => 'contact',
                'type' => 'internal',
                'new_tab' => 0,
            ),
        ));
        
        
    }
}