<?php

use App\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Category::create([
            'url' => 'europe',
            'title' => 'Europe',
            'description' => 'European Guidebooks'
        ]);

        Category::create([
            'url' => 'asia',
            'title' => 'Asia',
            'description' => 'Asian Guidebooks'
        ]);

        Category::create([
            'url' => 'americas',
            'title' => 'Amercias',
            'description' => 'Americas Guidebooks'
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
