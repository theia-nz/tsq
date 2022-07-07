<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormContactsTables extends Migration
{
    public function up()
    {
        Schema::create('form_contacts', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('description')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();

            $table->string('form_title')->nullable();
            $table->string('label_name')->nullable();
            $table->string('error_name')->nullable();
            $table->string('label_phone')->nullable();
            $table->string('error_phone')->nullable();
            $table->string('label_email')->nullable();
            $table->string('error_email_1')->nullable();
            $table->string('error_email_2')->nullable();
            $table->string('label_message')->nullable();
            $table->string('error_message')->nullable();
            $table->string('error_recaptcha')->nullable();
            $table->string('label_submit')->nullable();
            $table->string('message_success')->nullable();
            $table->string('message_failure')->nullable();
            $table->json('recipients')->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('form_contacts');
    }
}
