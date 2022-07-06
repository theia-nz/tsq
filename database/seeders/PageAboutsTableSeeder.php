<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageAboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_abouts')->delete();
        
        \DB::table('page_abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-05 01:58:47',
                'updated_at' => '2022-07-06 01:04:50',
                'published' => 1,
                'title' => 'About',
                'description' => '<p>Our extensive experience and <span class="about">T</span>echnical expertise allow us to deliver a range of projects with <span class="about">S</span>peed and accuracy. We pride ourselves in providing high <span class="about">Q</span>uality service and creating unique architectural designs that respond successfully to the needs of our clients, the environment and the market.</p>',
                'header_a' => 'About',
                'paragraph_a' => '<p>Our extensive experience and <span class="about">T</span>echnical expertise allow us to deliver a range of projects with <span class="about">S</span>peed and accuracy. We pride ourselves in providing high <span class="about">Q</span>uality service and creating unique architectural designs that respond successfully to the needs of our clients, the environment and the market.</p>',
                'link_label_a' => 'Say Hello',
                'link_a' => 'contact',
            ),
        ));
        
        
    }
}