<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        fake();
        $name= $this->faker->sentence;
        return [
            'titulo' => $name,
            'url' => str($name)->slug(),
            'contenido' => fake()->paragraphs(20,true),
            'descricion' => $this->faker->paragraphs(3,true),
            'category_id' => $this->faker->randomElement(['1,2,3,4,5']),
            'posted' => $this->faker->randomElement(['si','no']),
            'imagen' => $this->faker->imageUrl(),
        ];
    }
}
