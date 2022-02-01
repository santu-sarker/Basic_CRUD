<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('comment_id');
            $table->string('comment_des', 200);
            $table->unsignedBigInteger('comment_owner');
            $table->timestamps();

            $table->foreign('comment_owner')
                ->references('post_id')
                ->on('posts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // $table->foreign('comment_owner')
            //     ->references('post_id')
            //     ->on('post')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
