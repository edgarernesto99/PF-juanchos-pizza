<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(5)->usuario()->has(Persona::factory()->count(1))->create();
        User::factory()->times(5)->administrador()->create();
    }
}
