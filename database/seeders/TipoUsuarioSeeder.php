<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposusuarios = [
            ['tipo' =>'Administrador'],
            ['tipo' => 'Analista'],
            ['tipo' => 'Honorarios con Base'],
            ['tipo' => 'Honorarios puros'],
        ];
        foreach($tiposusuarios as $tipo){
            TipoUsuario::create($tipo);
        }
    }
}
