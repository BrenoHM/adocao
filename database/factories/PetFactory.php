<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'user_id' => 1,
            'breed_id' => fake()->numberBetween(1, 47),
            'color' => fake()->randomElement(['Amarelo', 'Chocolate', 'Branco', 'Preto', 'Cinzento', 'Dourado', 'Creme', 'Azul', 'Vermelho']),
            'phone' => '(31) 98897-5279',
            'birthday' => fake()->date(),
            'photo' => fake()->randomElement(['carousel1_img1.jpg', 'carousel1_img2.jpg', 'carousel1_img3.jpg', 'carousel1_img4.jpg', '1671648735.png', '1671734146.jpg']),
            'description' => fake()->text()
        ];
    }
}
