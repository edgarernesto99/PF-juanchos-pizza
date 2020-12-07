<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'descripcion' => $this->faker->sentence(10),
            'precio' => $this->faker->randomFloat(2,15,1000),
            'tamanio' => $this->faker->word(),
            'imagen' => $this->faker->image('public\storage',640,380,'pizza', false)
        ];
    }
    public function pizza() {
        return $this->state(function (array $attributes) {
            return [
                'tipo'=>'Pizza'
            ];
        });
    }
    public function complemento() {
        return $this->state(function (array $attributes) {
            return [
                'tipo'=>'Complemento'
            ];
        });
    }
}
