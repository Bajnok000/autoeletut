<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTulajdonos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tulajdonos', function (Blueprint $table) {
            $table->id("tulajdonos_id");
            $table->string("tulajdonos");
            $table->date("tulajdonkezd");
            $table->date("tulajdonvege");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tulajdonos');
    }
}
