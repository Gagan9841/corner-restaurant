<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->integer('item_id', true);
            $table->string('item_name');
            $table->integer('item_price');
            $table->string('item_description');
            $table->integer('item_cat')->index('item_cat');
            $table->integer('item_subcat')->nullable()->index('item_subcat');
            $table->string('item_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
