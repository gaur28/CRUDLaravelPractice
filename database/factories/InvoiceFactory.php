<?php

namespace Database\Factories;

use App\Models\Coustmer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $status = $this->faker->randomElement('P', 'V');
        return [
            'coustmer_id' => Coustmer::factory(),
            'amount' => $this->faker->numberBetween(100,1000),
             'status'=> true,
            // 'build_date' => $this->faker->dateTimeThisDecade(),
            // 'paid_date' => $this->faker->dateTimeThisDecade()
        ];
    }
}
