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
            ['nombre' =>'Maribel Apaez Fajardo'],
            ['nombre' =>'Gilberto García Guerra'],
        ];
        foreach($jefes as $jefe){
            Autoridades::create($jefe);
        }

    }
}
