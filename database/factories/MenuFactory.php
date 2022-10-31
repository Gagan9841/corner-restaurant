<?php

namespace Database\Factories;

use App\Models\Menu_category;
use App\Models\Sub_category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        $price = (int)fake()->numerify('###');
        $desc = fake()->sentence();
        $cat = function(){
            return Menu_category::factory()->create()->id;
        };
        $sub_cat = function(){
            return Sub_category::factory()->create()->id;
        };
        $img = fake()->sentence();
        return [
            //
            'item_name'=> $name,
            'item_price'=> $price,
            'item_description'=>$desc,
            'item_cat'=>$cat,
            'item_subcat'=>$sub_cat,
            'item_image'=>$img,

        ];
    }
}
