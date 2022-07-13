<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('form_contacts')->delete();
        
        \DB::table('form_contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-07-07 22:30:28',
                'updated_at' => '2022-07-13 08:34:30',
                'published' => 1,
                'title' => 'Contact Form',
                'description' => NULL,
                'form_title' => 'Quick Enquiry',
                'label_name' => 'Name*',
                'error_name' => 'Please enter your full name',
                'label_phone' => 'Phone*',
                'error_phone' => 'Please enter you phone number',
                'label_email' => 'Email*',
                'error_email_1' => 'Please enter your email address',
                'error_email_2' => 'Please enter a valid email address',
                'label_message' => 'Message*',
                'error_message' => 'Please enter your message',
                'error_recaptcha' => 'Are you a robot?',
                'label_submit' => 'Send',
                'message_success' => 'We will get back to you as soon as possible',
                'message_failure' => 'Something went wrong, please refresh the page and try again',
                'recipients' => '[{"id": 1657236621511, "name": "Admin", "email": "admin@tsq.co.nz", "blocks": [], "medias": [], "browsers": []}]',
            ),
        ));
        
        
    }
}