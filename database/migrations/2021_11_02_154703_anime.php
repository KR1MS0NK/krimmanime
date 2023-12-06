<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('describe');
            $table->string('dlink');
            $table->timestamps();
        });
        
        
        }


     /**
     * Run the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifexists('anime');
    }
}
