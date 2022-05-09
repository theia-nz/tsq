<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TwillUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('twill_users')->delete();
        
        \DB::table('twill_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-05-09 09:17:10',
                'updated_at' => '2022-05-09 09:17:10',
                'published' => 1,
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => '$2y$10$sHj3abkv5cP.sndn9gx8A.x8xH7TKSi6LLljAwGfiZJr2m1xz9EVq',
                'role' => 'SUPERADMIN',
                'title' => NULL,
                'description' => NULL,
                'remember_token' => NULL,
                'language' => NULL,
            ),
        ));
        
        
    }
}