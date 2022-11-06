<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Main_category>
 */
class Main_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cat_name = fake()->name();
        $cat_order = (int)fake()->numerify('###');
        // $slug = 'slug' => Str::slug($cat_name);
        $img = str::random(3);
        return [
            //
            'main_cat_name'=>$cat_name,
            'main_cat_order'=>$cat_order,
            'slug' => Str::slug($cat_name),
            'main_cat_img'=> $img,
            // 'main_cat_order'=>(int) $fake$cat_order,

        ];
    }
}
