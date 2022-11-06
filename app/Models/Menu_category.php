<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_category extends Model
{
    use HasFactory;

    protected $table = 'menu_categories';
    protected $primaryKey = 'main_cat_id';
    protected $fillable = ['cat_id' ,'main_category','cat_order'];

    public function mainCategory(){

        return $this->belongsTo(Main_category::class,'main_category','main_cat_id');
    }

    public function subCategory()
    {
        return $this->hasMany(Sub_category::class,'main_cat','sub_cat_id');
    }

    public function menu()
    {
        return $this->hasMany(Menu::class,'item_cat','cat_id');
    }


}
