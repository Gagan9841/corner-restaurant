<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $table = 'menus';

    public function subCategory(){
        return $this->belongsTo(Sub_category::class,'item_subcat','subcat_id');

    }

    public function menuCategory(){
        return $this->belongsTo(Menu_category::class,'item_cat','cat_id');
    }
}


