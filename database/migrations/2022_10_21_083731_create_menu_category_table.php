<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->integer('cat_id', true);
            $table->string('cat_name');
            $table->integer('main_category')->nullable()->index('main_categories');
            $table->integer('cat_order')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_categories');
    }
}
