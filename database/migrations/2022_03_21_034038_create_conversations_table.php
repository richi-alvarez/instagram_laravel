<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            //user
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //contact
            $table->unsignedInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('users');
            //content
            $table->text('last_message')->nullable();
            $table->dateTime('last_time')->nullable();
            
            $table->boolean('listen_notifications')->default(true);
            $table->boolean('has_bloked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}
