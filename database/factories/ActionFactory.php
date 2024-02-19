<?php

namespace Database\Factories;

use App\Models\Action;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Action>
 */
class ActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
    */

    protected $model = Action::class;
    
    public function definition(): array
    {
        return [
            'target' => $this->faker->sentence(),
            'started_at' => $this->faker->dateTimeBetween('-30 days', '+30 days'),
            'ended_at' => $this->faker->dateTimeBetween('+60 days', '+120 days'),
            'type_audits_id' => $this->faker->numberBetween(1, 11)
        ];
    }


}