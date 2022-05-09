<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TwillPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('twill_password_resets')->delete();
        
        
        
    }
}