<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMenuCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu_categories', function (Blueprint $table) {
            $table->foreign(['main_categories'], 'menu_categories_ibfk_1')->references(['main_cat_id'])->on('main_category')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_categories', function (Blueprint $table) {
            $table->dropForeign('menu_categories_ibfk_1');
        });
    }
}
