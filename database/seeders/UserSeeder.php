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
            [
                'tipo' => '1',
                'name' => 'admin',
                'email' => 'admin',
                'password' => Hash::make('Chillu#08'),
                'jefe_directo_id' => 1,
                'jefe_division_id' => 1
            ],
            [
                'tipo' => '2',
                'name' => 'des',
                'email' => 'des',
                'password' => Hash::make('Sup3r10r#24'),
                'paterno' => 'DIrección',
                'materno' => 'Educacion',
                'nombres' => 'Superior',
                'jefe_directo_id' => 1,
                'jefe_division_id' => 1
            ],
            [
                'tipo' => '3',
                'name' => 'base',
                'email' => 'base@gmail.com',
                'password' => Hash::make('password'),
                'paterno' => 'Bátiz',
                'materno' => 'Paredes',
                'nombres' => 'Juan de Dios',
                'jefe_directo_id' => 1,
                'jefe_division_id' => 1
            ],
            [
                'tipo' => '4',
                'name' => 'puro',
                'email' => 'puro@gmail.com',
                'password' => Hash::make('password'),
                'paterno' => 'Perez',
                'nombres' => 'Dámaso',
                'jefe_directo_id' => 1,
                'jefe_division_id' => 1
            ],
            ['tipo' => '3', 'name' => 'mapaezf@ipn.mx', 'password' => Hash::make('LlhE2120*'), 'email' => 'mapaezf@ipn.mx', 'paterno' => 'APAEZ', 'materno' => 'FAJARDO', 'nombres' => 'MARIBEL', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'easiaind@ipn.mx', 'password' => Hash::make('OyfH9734+'), 'email' => 'easiaind@ipn.mx', 'paterno' => 'ASIAIN', 'materno' => 'DE LA LUZ', 'nombres' => 'ERICK', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'ebarcenas@ipn.mx', 'password' => Hash::make('MfyP9435+'), 'email' => 'ebarcenas@ipn.mx', 'paterno' => 'BARCENAS', 'materno' => 'CASTILLO', 'nombres' => 'EDITH', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'mblandoc@ipn.mx', 'password' => Hash::make('GrsC9664+'), 'email' => 'mblandoc@ipn.mx', 'paterno' => 'BLANDO', 'materno' => 'CHAVEZ', 'nombres' => 'MACARENA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'ccruzz@ipn.mx', 'password' => Hash::make('RihF1335*'), 'email' => 'ccruzz@ipn.mx', 'paterno' => 'CRUZ', 'materno' => 'ZAMORANO', 'nombres' => 'CESAR', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'cfloresce@ipn.mx', 'password' => Hash::make('XlsY8905*'), 'email' => 'cfloresce@ipn.mx', 'paterno' => 'FLORES', 'materno' => 'CERVANTES', 'nombres' => 'CLAUDIA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'gmoya@ipn.mx', 'password' => Hash::make('DpsA8634+'), 'email' => 'gmoya@ipn.mx', 'paterno' => 'MOYA', 'materno' => 'ARANJO', 'nombres' => 'GABRIELA JOSELIN', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'dnicolas@ipn.mx', 'password' => Hash::make('CytZ9710+'), 'email' => 'dnicolas@ipn.mx', 'paterno' => 'NICOLÁS', 'materno' => 'ÁLVAREZ', 'nombres' => 'DULCE ESTEFANIA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'mmpazg@ipn.mx', 'password' => Hash::make('UojO7392+'), 'email' => 'mmpazg@ipn.mx', 'paterno' => 'PAZ', 'materno' => 'GALLARDO', 'nombres' => 'MARIA MIREYA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'lbramirez@ipn.mx', 'password' => Hash::make('XouW8704*'), 'email' => 'lbramirez@ipn.mx', 'paterno' => 'RAMIREZ', 'materno' => 'GUERRERO', 'nombres' => 'LOURDES BERENICE', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'pramirezs@ipn.mx', 'password' => Hash::make('JrdJ1507+'), 'email' => 'pramirezs@ipn.mx', 'paterno' => 'RAMÍREZ', 'materno' => 'SEGURA', 'nombres' => 'PAOLA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'nricom@ipn.mx', 'password' => Hash::make('EstK7684*'), 'email' => 'nricom@ipn.mx', 'paterno' => 'RICO', 'materno' => 'MUÑOZ', 'nombres' => 'NANCY FABIOLA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'jsotot@ipn.mx', 'password' => Hash::make('TawH2421*'), 'email' => 'jsotot@ipn.mx', 'paterno' => 'SOTO', 'materno' => 'TELLO', 'nombres' => 'JAVIER', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'jvelazquezl@ipn.mx', 'password' => Hash::make('HuqJ7014*'), 'email' => 'jvelazquezl@ipn.mx', 'paterno' => 'VELAZQUEZ', 'materno' => 'LOPEZ', 'nombres' => 'JOSE', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'overgara@ipn.mx', 'password' => Hash::make('JvaY5811*'), 'email' => 'overgara@ipn.mx', 'paterno' => 'VERGARA', 'materno' => 'MARTINEZ', 'nombres' => 'OSIRIS AMARANTA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '3', 'name' => 'sdelatorrep@ipn.mx', 'password' => Hash::make('KwnF8041*'), 'email' => 'sdelatorrep@ipn.mx', 'paterno' => 'DE LA TORRE', 'materno' => 'PEREZ', 'nombres' => 'SERGIO ALEJANDRO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'isabelah77@live.com.mx', 'password' => Hash::make('OedH3084+'), 'email' => 'isabelah77@live.com.mx', 'paterno' => 'AVILA', 'materno' => 'HERNANDEZ', 'nombres' => 'ISABEL', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'sandysde@hotmail.com', 'password' => Hash::make('VzaG8885+'), 'email' => 'sandysde@hotmail.com', 'paterno' => 'CASTILLO', 'materno' => 'HERREJON', 'nombres' => 'SANDRA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'emmanuelalb88@gmail.com', 'password' => Hash::make('KskC8819*'), 'email' => 'emmanuelalb88@gmail.com', 'paterno' => 'CHAVEZ', 'materno' => 'ARANDA', 'nombres' => 'ALBERTO EMMANUEL', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'carlos.thresholdlight@gmail.com', 'password' => Hash::make('IjxU5141+'), 'email' => 'carlos.thresholdlight@gmail.com', 'paterno' => 'GARCIA', 'materno' => 'SANTANA', 'nombres' => 'CARLOS ALBERTO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'g1alfredo@gmail.com', 'password' => Hash::make('YivA8242+'), 'email' => 'g1alfredo@gmail.com', 'paterno' => 'GODINEZ', 'materno' => 'GODINEZ', 'nombres' => 'ALFREDO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'almacrisgomez@gmail.com', 'password' => Hash::make('ItbX4113*'), 'email' => 'almacrisgomez@gmail.com', 'paterno' => 'GOMEZ', 'materno' => 'HERNANDEZ', 'nombres' => 'ALMA CRISTINA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'pazjurado@yahoo.com.mx', 'password' => Hash::make('DeoI5513+'), 'email' => 'pazjurado@yahoo.com.mx', 'paterno' => 'JURADO', 'materno' => 'BARRANCO', 'nombres' => 'REFUGIO IRENE', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'viridiana1726@yahoo.com', 'password' => Hash::make('ShrC6194+'), 'email' => 'viridiana1726@yahoo.com', 'paterno' => 'LAZARO', 'materno' => 'CLEMENTE', 'nombres' => 'VIRIDIANA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'mike.lopme@gmail.com', 'password' => Hash::make('OrtQ5950*'), 'email' => 'mike.lopme@gmail.com', 'paterno' => 'LÓPEZ', 'materno' => 'MEJIA', 'nombres' => 'MIGUEL ANGEL', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'arturlozada@gmail.com', 'password' => Hash::make('WdpN2516*'), 'email' => 'arturlozada@gmail.com', 'paterno' => 'LOZADA', 'materno' => 'LOBACO', 'nombres' => 'ARTURO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'nydia.mendezortiz@gmail.com', 'password' => Hash::make('LqzQ8996+'), 'email' => 'nydia.mendezortiz@gmail.com', 'paterno' => 'MÉNDEZ', 'materno' => 'ORTIZ', 'nombres' => 'NYDIA IRENE', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'annymillan2@gmail.com', 'password' => Hash::make('ZwtM2816+'), 'email' => 'annymillan2@gmail.com', 'paterno' => 'MILLAN', 'materno' => 'ROSAS', 'nombres' => 'ANAYANZI', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'maricruz.moralesreyes@gmail.com', 'password' => Hash::make('NrgA2727*'), 'email' => 'maricruz.moralesreyes@gmail.com', 'paterno' => 'MORALES', 'materno' => 'REYES', 'nombres' => 'MARICRUZ', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'agdalenanavaflores@gmail.com', 'password' => Hash::make('RklB7107*'), 'email' => 'agdalenanavaflores@gmail.com', 'paterno' => 'NAVA', 'materno' => 'FLORES', 'nombres' => 'MARÍA MAGDALENA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'carolinaoclica@gmail.com', 'password' => Hash::make('XboJ5250+'), 'email' => 'carolinaoclica@gmail.com', 'paterno' => 'OCLICA', 'materno' => 'ZUÑIGA', 'nombres' => 'GABRIELA CAROLINA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'redrodac@gmail.com', 'password' => Hash::make('CrqX3031+'), 'email' => 'redrodac@gmail.com', 'paterno' => 'OROZCO', 'materno' => 'AGUILAR', 'nombres' => 'ALFONSO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'siulfedisa@gmail.com', 'password' => Hash::make('EmgC1422+'), 'email' => 'siulfedisa@gmail.com', 'paterno' => 'PARRALES', 'materno' => 'SÁNCHEZ', 'nombres' => 'LUIS ALBERTO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'rospeezquivel1706@gmail.com', 'password' => Hash::make('QdzS4117+'), 'email' => 'rospeezquivel1706@gmail.com', 'paterno' => 'PEREZ', 'materno' => 'EZQUIVEL', 'nombres' => 'MA. DEL ROSARIO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'gtr9110@gmail.com', 'password' => Hash::make('AphO9196*'), 'email' => 'gtr9110@gmail.com', 'paterno' => 'TADEO', 'materno' => 'ROSAS', 'nombres' => 'GERARDO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'evelynth1020@hotmail.com', 'password' => Hash::make('HtdV7810+'), 'email' => 'evelynth1020@hotmail.com', 'paterno' => 'TORRES', 'materno' => 'HERNANDEZ', 'nombres' => 'EVELYN GUADALUPE', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'vamavema@gmail.com', 'password' => Hash::make('CpoZ1713*'), 'email' => 'vamavema@gmail.com', 'paterno' => 'VERGARA', 'materno' => 'MARTINEZ', 'nombres' => 'VALERIA MARANATA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'zapata20212@gmail.com', 'password' => Hash::make('YthZ8503+'), 'email' => 'zapata20212@gmail.com', 'paterno' => 'ZAPATA', 'materno' => 'RAMOS', 'nombres' => 'GERARDO', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'kagt97@outlook.com', 'password' => Hash::make('TxfP5477*'), 'email' => 'kagt97@outlook.com', 'paterno' => 'GONZALEZ', 'materno' => 'TORRES', 'nombres' => 'KAREN ANNETTE', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'morales.g.guadalupe.e@gmail.com', 'password' => Hash::make('LcdD1400+'), 'email' => 'morales.g.guadalupe.e@gmail.com', 'paterno' => 'MORALES', 'materno' => 'GAYOSSO', 'nombres' => 'GUADALUPE ESMERALDA', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
            ['tipo' => '4', 'name' => 'montseoclica@gmail.com', 'password' => Hash::make('KxoS3922*'), 'email' => 'montseoclica@gmail.com', 'paterno' => 'OCLICA', 'materno' => 'ZUÑIGA', 'nombres' => 'PAOLA MONTSERRAT', 'jefe_directo_id' => '1', 'jefe_division_id' => '1'],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
