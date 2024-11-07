<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            ['tipo' => '1', 'name' => 'admin', 'email' => 'admin@ipn.mx', 'password' => Hash::make('password'), 'jefe_directo_id' => 1, 'jefe_departamento_id' => 1 ],
            ['tipo' => '2', 'name' => 'vlazaro', 'email' => 'responsable@ipn.mx', 'password' => Hash::make('password'), 'paterno' => 'Lázaro', 'materno' => 'Clemente', 'nombres' => 'Viridiana', 'jefe_directo_id' => 1, 'jefe_departamento_id' => 1 ],
            ['tipo' => '3', 'name' => 'base', 'email' => 'base@gmail.com', 'password' => Hash::make('password'), 'paterno' => 'de Dios', 'materno'=> 'Bátiz', 'nombres' => 'Juan de Dios', 'jefe_directo_id' => 1, 'jefe_departamento_id' => 1 ],
            ['tipo' => '4', 'name' => 'puro', 'email' => 'puro@gmail.com', 'password' => Hash::make('password'), 'paterno' => 'Perez', 'nombres' => 'Dámaso', 'jefe_directo_id' => 1, 'jefe_departamento_id' => 1  ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
       
    }
}
