<?php

use App\Brand;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Brand::create([
            'url' => 'country-guide',
            'title' => 'My Country Guides',
            'description' => 'Guidebooks specific to countries'
        ]);

        Brand::create([
            'url' => 'annas-picks',
            'title' => 'Annas Picks',
            'description' => 'Series of guides to our favourite places'
        ]);

        Brand::create([
            'url' => 'food-travel',
            'title' => 'Delicious Adventures',
            'description' => 'A guide series focused on food'
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
