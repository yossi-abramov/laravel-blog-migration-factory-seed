<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); 

            $table->bigInteger('user_id') 
            ->foreign('user_id')
            ->references('id')
            ->on('users');
            
            // VARCHAR equivalent column with a length.
            $table->string('slug', 255)
            ->unique(); // Index
            
            $table->string('title', 255);  
            
            // TEXT equivalent column.
            $table->text('description'); 
            
            $table->text('post');
            
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
        Schema::dropIfExists('posts');
    }
}
