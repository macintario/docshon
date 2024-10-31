<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RegimenFiscal;

class RegimenFiscalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regimens = [
            ['regimen' => 'Regimen Simplificado de Confianza'],
            ['regimen' => 'Regimen de las Personas Fisicas con actividades Empresariales y Profesionales'],
        ];
        foreach($regimens as $regimen){
            RegimenFiscal::create($regimen);
        }
    }
}
