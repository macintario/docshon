<?php

namespace Database\Seeders;

use App\Models\DocumentoNecesario;
use App\Models\TipoUsuario;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(AutoridadesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DocumentoNecesarioSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(RegimenFiscalSeeder::class);
    }
}
