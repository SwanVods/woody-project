<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productSuffixes = ['Meja', 'Kursi'];
        $name = Arr::random($productSuffixes) . ' ' . $this->faker->company();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'desc' => $this->faker->realText(320),
            'price' => $this->faker->numberBetween(200000, 400000),
            'color' => $this->faker->colorName(),
            'img' => 'img-' . rand(4, 8) . '.png',
        ];
    }
}
