<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';

    public function menuCategory(){
        return $this->belongsTo(Menu_category::class,'main_cat','cat_id');
    }

    public function menu(){
        return $this->hasMany(Menu::class,'item_subcat','subcat_id');
    }
}
