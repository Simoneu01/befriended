<?php

declare(strict_types=1);

namespace Rennokki\Befriended\Test\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Rennokki\Befriended\Test\Models\SimplePage;

final class SimplePageFactory extends Factory
{
    protected $model = SimplePage::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Page' . Str::random(5),
        ];
    }
}
