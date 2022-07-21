<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Documento;


class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'Titulo' => $this->faker->sentence(4),
            'Descripcion' => $this->faker->text(),
            'year' => $this->faker->numberBetween(2011,2022),
            'Numero' => $this->faker->numberBetween(1,120),
            'url' => $this->faker->numberBetween(1,11) . 'pdf',
            'user_id' => 1,
            'categoria_id' => $this->faker->numberBetween(1,4),
            'tipo_id' => $this->faker->numberBetween(1,2),
        ];
    }

}
