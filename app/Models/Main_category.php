<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Main_category extends Model
{
    use HasFactory;

    protected $table = 'main_categories';
    protected $fillable = ['main_cat_id','main_cat_name','slug','main_cat_order','main_cat_img'];



    protected static function boot()
    {
        parent::boot();

        static::created(function ($main_category) {
            $main_category->update(['slug' => $main_category->main_cat_name]);
        });
    }

    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value); //maxime-vero-odio-dicta-accusamus-voluptatem-rem-consectetur

        if (static::whereSlug($slug)->exists()) {
            $slug = "{$slug}-{$this->main_cat_id}";
        }

        $this->attributes['slug'] = $slug;
    }

    public function getAccessorAttribute()
    {
        return asset('index.php');
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function menuCategory()
    {
        return $this->hasMany(Menu_category::class,'main_category','cat_id');
    }

    public function path()
    {
//        return "/posts/{$this->slug}";
        // return "catalog/main-category/{$this->category->slug}";
        return "catalog/main-category";
    }
}
