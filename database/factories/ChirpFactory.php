<?php

namespace Database\Factories;

use App\Models\Chirps\ChirpModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ChirpFactory extends Factory
{
    protected $model = ChirpModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message' => fake()->sentence(10),
        ];
    }

    public function forUser(User $user)
    {
        return $this->state(function () use ($user) {
            return [
                'user_id' => $user->getKey(),
            ];
        });
    }
}
