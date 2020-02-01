<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('deals');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
         public function down()
     {
         Schema::create('deals', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->timestamps();
         });
     }
}
