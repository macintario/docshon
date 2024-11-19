<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autoridades;

class AutoridadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jefes = [
            ['nombre' =>'Gilberto Alejandro García Guerra'],
            ['nombre' =>'Maribel Apaez Fajardo'],
            ['nombre' => 'David Osvaldo Sepulveda García'],
            ['nombre' => 'Maribel Paz Garduño'],
            ['nombre' => 'José Arturo García Gomar'],
            ['nombre' => 'Anabel Gómez Santamaría'],
            ['nombre' => 'Jonathan Reyes González'],
            ['nombre' => 'Norma del Carmen Navarrete Pérez'],
            ['nombre' => 'Cinthya Susana Reyes Santos'],
            ['nombre' => 'Pamela Isabel Quintero Medina'],
            ['nombre' => 'Efren Dorado Morales'],
        ];
        foreach($jefes as $jefe){
            Autoridades::create($jefe);
        }

    }
}
