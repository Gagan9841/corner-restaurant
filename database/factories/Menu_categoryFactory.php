<?php

namespace Database\Factories;

use App\Models\Main_category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu_category>
 */
class Menu_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $menu_cat_name = fake()->name();
        $cat_order = (int)fake()->numerify('##');
        $main_cat = function(){
            return Main_category::factory()->create()->id;
        };
        return [
            //
            'cat_name'=>$menu_cat_name,
            'main_category'=>$main_cat,
            'cat_order'=>$cat_order,
        ];
    }
}
