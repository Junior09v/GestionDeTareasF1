<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre' => $this->faker->sentence(2),
        'descripcion' => $this->faker->paragraph(3),
        'estado' => $this->faker->randomElement(['pendiente', 'en progreso', 'completada']),
        'fecha_inicio' => $this->faker->date(),
        'fecha_fin' => $this->faker->date(),
        'proyecto_id' => $this-> faker-> numberBetween(1,20),
        'usuario_id' => $this-> faker-> numberBetween(1,20),
        ];
    }
}
