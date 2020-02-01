<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned()->index();
            $table->bigInteger('brand_id')->unsigned()->index();
            $table->string('name');
            $table->string('url');
            $table->string('description');
            $table->decimal('price')->default(0);
            $table->text('content')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
        });

    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

Class RemoveProductImages extends Migration
  {
      public function up()
      {
          Schema::table('$products', function($table) {
             $table->dropColumn(['image']);
          });
      }

      public function down()
      {
          Schema::table('$products', function($table) {
             $table->string('image');
          });
      }
  }
