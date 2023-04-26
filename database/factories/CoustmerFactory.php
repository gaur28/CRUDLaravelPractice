<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\type;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coustmer>
 */
class CoustmerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['I', 'B']);
        $name = $type == 'I'? $this->faker->name() : $this->faker->company();
        return [
            'name'=> $name,
            'type'=> $type,
            'email'=> $this->faker->email(),
            'address'=> $this->faker->streetAddress(),
        ];
    }
}
