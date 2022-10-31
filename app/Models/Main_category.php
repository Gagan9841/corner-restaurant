<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_category extends Model
{
    use HasFactory;

    protected $table = 'main_categories';
    protected $fillable = ['main_cat_id','main_cat_name','main_cat_order','main_cat_img'];
    
    public function menuCategory()
    {
        return $this->hasMany(Menu_category::class,'main_category','cat_id');
    }
}
