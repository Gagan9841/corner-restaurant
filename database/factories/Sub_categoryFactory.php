<?php

namespace Database\Factories;
use App\Models\Menu_category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sub_category>
 */
class Sub_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sub_cat_name = fake()->name();
        $main_cat= function(){
            return Menu_category::factory()->create()->id;

        };
        return [
            'subcat_name'=>$sub_cat_name,
            'main_cat'=>$main_cat,
        ];
    }
}
