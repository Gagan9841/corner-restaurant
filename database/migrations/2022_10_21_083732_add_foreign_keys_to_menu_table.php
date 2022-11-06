<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->foreign(['item_cat'], 'menus_ibfk_1')->references(['cat_id'])->on('menu_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['item_subcat'], 'menus_ibfk_2')->references(['subcat_id'])->on('sub_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropForeign('menus_ibfk_1');
            $table->dropForeign('menus_ibfk_2');
        });
    }
}
