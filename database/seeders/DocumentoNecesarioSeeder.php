<?php

namespace Database\Seeders;

use App\Models\DocumentoNecesario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoNecesarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $documentosNecesarios = [
                // 1 base; 2 puro
                // base
            ['puro_base' => 1, 'numero' => 1, 'documento' => 'Acta de nacimiento', 'url' =>''],
            ['puro_base' => 1, 'numero' => 2, 'documento' => 'CURP','url' =>''],
            ['puro_base' => 1, 'numero' => 3, 'documento' => 'Constancia de Situación Fiscal','url' =>''],
            ['puro_base' => 1, 'numero' => 4, 'documento' => 'Opinion de Cumplimiento Positiva (32D)','url' =>'' ],
            ['puro_base' => 1, 'numero' => 5, 'documento' => 'Identificación Oficial','url' =>'' ],
            ['puro_base' => 1, 'numero' => 6, 'documento' => 'Comprobante de estudios','url' =>''],
            ['puro_base' => 1, 'numero' => 7, 'documento' => 'Comprobante de domicilio','url' =>''],
            ['puro_base' => 1, 'numero' => 8, 'documento' => 'Carátula de Estado de Cuenta','url' =>''],
            ['puro_base' => 1, 'numero' => 9, 'documento' => 'Pretensiones económicas','url' =>''],
            ['puro_base' => 1, 'numero' => 10, 'documento' => 'Informe con las actividades que va a desempeñar','url' =>'' ],
            ['puro_base' => 1, 'numero' => 11, 'documento' => 'Curriculum vitae','url' =>'' ],
            ['puro_base' => 1, 'numero' => 12, 'documento' => 'Cartilla del Servicio Militar (Hombres)','url' =>''],
            ['puro_base' => 1, 'numero' => 13, 'documento' => 'Manifiesto de particulares','url' =>'' ],
            ['puro_base' => 1, 'numero' => 14, 'documento' => 'Carta de Ausencia de Conflicto de Interés','url' =>''],
            ['puro_base' => 1, 'numero' => 15, 'documento' => 'Constancia de no inhabilitación','url' =>''],
            ['puro_base' => 1, 'numero' => 16, 'documento' => 'Compatibilidad de Empleo','url' =>''],
            ['puro_base' => 1, 'numero' => 17, 'documento' => 'Credencial Institucional','url' =>''],
            ['puro_base' => 1, 'numero' => 18, 'documento' => 'Último Talón de Pago','url' =>''],
            ['puro_base' => 1, 'numero' => 19, 'documento' => 'Formato Ùnico de Personal (FUP) vigente','url' =>''],
            ['puro_base' => 1, 'numero' => 20, 'documento' => 'Registro Único de Actividades Académicas (RUAA)','url' =>'' ],
            ['puro_base' => 1, 'numero' => 21, 'documento' => 'Comprobante de obtención ante el SAT del la firma electrónica avanzada FIEL','url' =>''],
            ['puro_base' => 1, 'numero' => 22, 'documento' => 'Escrito que acredita la existencia y personalidad jurídica','url' =>''],
            ['puro_base' => 1, 'numero' => 23, 'documento' => 'Escrito de confidencialidad','url' =>''],
            ['puro_base' => 1, 'numero' => 24, 'documento' => 'Escrito de domicilio consignado, teléfono y correo','url' =>''],
            ['puro_base' => 1, 'numero' => 25, 'documento' => 'Maniifesro bajo protesta de decir verdad artículos 50 y 60','url' =>''],
            ['puro_base' => 1, 'numero' => 26, 'documento' => 'Escrito de declaración de integridad bajo protesta de decir verdad','url' =>''],
            ['puro_base' => 1, 'numero' => 27, 'documento' => 'Escrito en el que manifiesta bajo protesta de decir verdad que es de nacionalidad mexicana','url' =>''],
            ['puro_base' => 1, 'numero' => 28, 'documento' => 'Escrito de designación de beneficiario en caso de fallecimiento','url' =>''],
            ['puro_base' => 1, 'numero' => 29, 'documento' => 'Comprobante de alta en sistema electrónico  de información Pública Gubernamental (COMPRANET)','url' =>''],
            // puros
            ['puro_base' => 2, 'numero' => 1, 'documento' => 'Acta de nacimiento', 'url' =>''],
            ['puro_base' => 2, 'numero' => 2, 'documento' => 'CURP','url' =>''],
            ['puro_base' => 2, 'numero' => 3, 'documento' => 'Constancia de Situación Fiscal','url' =>''],
            ['puro_base' => 2, 'numero' => 4, 'documento' => 'Opinion de Cumplimiento Positiva (32D)','url' =>'' ],
            ['puro_base' => 2, 'numero' => 5, 'documento' => 'Comprobante de obtención ante el SAT del la firma electrónica avanzada FIEL','url' =>''],
            ['puro_base' => 2, 'numero' => 6, 'documento' => 'Identificación Oficial','url' =>'' ],
            ['puro_base' => 2, 'numero' => 7, 'documento' => 'Comprobante de estudios','url' =>''],
            ['puro_base' => 2, 'numero' => 8, 'documento' => 'Comprobante de domicilio','url' =>''],
            ['puro_base' => 2, 'numero' => 9, 'documento' => 'Cartilla del Servicio Militar (Hombres)','url' =>''],
            ['puro_base' => 2, 'numero' => 10, 'documento' => 'Carátula de Estado de Cuenta','url' =>''],
            ['puro_base' => 2, 'numero' => 11, 'documento' => 'Pretensiones económicas','url' =>''],
            ['puro_base' => 2, 'numero' => 12, 'documento' => 'Informe con las actividades que va a desempeñar','url' =>'' ],
            ['puro_base' => 2, 'numero' => 13, 'documento' => 'Curriculum vitae','url' =>'' ],
            ['puro_base' => 2, 'numero' => 14, 'documento' => 'Manifiesto de particulares','url' =>'' ],
            ['puro_base' => 2, 'numero' => 15, 'documento' => 'Escrito que acredita la existencia y personalidad jurídica','url' =>''],
            ['puro_base' => 2, 'numero' => 16, 'documento' => 'Escrito de confidencialidad','url' =>''],
            ['puro_base' => 2, 'numero' => 17, 'documento' => 'Escrito de domicilio consignado, teléfono y correo','url' =>''],
            ['puro_base' => 2, 'numero' => 18, 'documento' => 'Maniifesro bajo protesta de decir verdad artículos 50 y 60','url' =>''],
            ['puro_base' => 2, 'numero' => 19, 'documento' => 'Escrito de declaración de integridad bajo protesta de decir verdad','url' =>''],
            ['puro_base' => 2, 'numero' => 20, 'documento' => 'Escrito en el que manifiesta bajo protesta de decir verdad que es de nacionalidad mexicana','url' =>''],
            ['puro_base' => 2, 'numero' => 21, 'documento' => 'Escrito de designación de beneficiario en caso de fallecimiento','url' =>''],
            ['puro_base' => 2, 'numero' => 22, 'documento' => 'Carta de Ausencia de Conflicto de Interés','url' =>''],
            ['puro_base' => 2, 'numero' => 23, 'documento' => 'Comprobante de alta en sistema electrónico  de información Pública Gubernamental (COMPRANET)','url' =>''],
        ];
        foreach ($documentosNecesarios as $documentosNecesario) {
            DocumentoNecesario::create($documentosNecesario);
        }

    }
}
