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
        Schema::table('menu', function (Blueprint $table) {
            $table->foreign(['item_cat'], 'menu_ibfk_1')->references(['cat_id'])->on('menu_category')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['item_subcat'], 'menu_ibfk_2')->references(['subcat_id'])->on('sub_category')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu', function (Blueprint $table) {
            $table->dropForeign('menu_ibfk_1');
            $table->dropForeign('menu_ibfk_2');
        });
    }
}
