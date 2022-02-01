<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloggers', function (Blueprint $table) {
            $table->bigIncrements('blogger_id');
            $table->string('blogger_name', 100);
            $table->string('blogger_email', 100)->unique();
            $table->enum('blogger_type', ['admin', 'normal']);
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
        Schema::dropIfExists('bloggers');
    }
}
