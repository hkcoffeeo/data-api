<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SingaporeSavingsBond>
 */
class SingaporeSavingsBondFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'issue_code' => fake()->name(),
            'isin_code' => fake()->name(),
            'issue_date' => Carbon::now()->startOfMonth(),
            'maturity_date' => Carbon::now()->startOfMonth()->addYears(10),
            'interest_step_up_years_percentage' => ["0.45%", "1.27%", "1.60%", "1.80%", "1.96%", "2.09%", "2.10%", "2.12%", "2.21%", "2.44%"],
            'average_per_annum_return_percentage' => ["0.45%", "0.86%", "1.10%", "1.27%", "1.41%", "1.52%", "1.59%", "1.66%", "1.71%", "1.78%"],
        ];
    }
}
