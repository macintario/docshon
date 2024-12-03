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
                // 3 base; 4 puro
                // base
            ['puro_base' => 3, 'numero' => 1, 'documento' => 'Acta de nacimiento', 'url' =>''],
            ['puro_base' => 3, 'numero' => 2, 'documento' => 'CURP','url' =>''],
            ['puro_base' => 3, 'numero' => 3, 'documento' => 'Constancia de Situación Fiscal','url' =>'https://www.sat.gob.mx/aplicacion/login/53027/genera-tu-constancia-de-situacion-fiscal'],
            ['puro_base' => 3, 'numero' => 4, 'documento' => 'Opinion de Cumplimiento Positiva (32D)','url' =>'https://login.mat.sat.gob.mx/nidp/app/login?id=contr-dual-totp-eFirma&sid=0&option=credential&sid=0' ],
            ['puro_base' => 3, 'numero' => 5, 'documento' => 'Identificación Oficial','url' =>'' ],
            ['puro_base' => 3, 'numero' => 6, 'documento' => 'Comprobante de estudios','url' =>''],
            ['puro_base' => 3, 'numero' => 7, 'documento' => 'Comprobante de domicilio','url' =>''],
            ['puro_base' => 3, 'numero' => 8, 'documento' => 'Carátula de Estado de Cuenta','url' =>''],
            ['puro_base' => 3, 'numero' => 9, 'documento' => 'Pretensiones económicas','url' =>'https://docs.google.com/document/d/1be7eJaUPxXaRGcbVb3Ve8N-X5h6gY1KZ/edit'],
            ['puro_base' => 3, 'numero' => 10, 'documento' => 'Informe con las actividades que va a desempeñar','url' =>'https://docs.google.com/document/d/1XrYk2462x1Lt3AIhpvof4p7W1Gk6jHyE/edit' ],
            ['puro_base' => 3, 'numero' => 11, 'documento' => 'Curriculum vitae','url' =>'' ],
            ['puro_base' => 3, 'numero' => 12, 'documento' => 'Cartilla del Servicio Militar (Hombres)','url' =>''],
            ['puro_base' => 3, 'numero' => 13, 'documento' => 'Manifiesto de particulares','url' =>'https://manifiesto.funcionpublica.gob.mx/SMP-web/loginPage.jsf' ],
            ['puro_base' => 3, 'numero' => 14, 'documento' => 'Carta de Ausencia de Conflicto de Interés','url' =>'https://docs.google.com/document/d/1sp-0HF42EUBbIhpD6vOqL3dZnFfzQ19U/edit'],
            ['puro_base' => 3, 'numero' => 15, 'documento' => 'Constancia de no inhabilitación','url' =>'https://www.gob.mx/tramites/ficha'],
            ['puro_base' => 3, 'numero' => 16, 'documento' => 'Compatibilidad de Empleo','url' =>'https://docs.google.com/document/d/1OKFCO4AmKkFHqVHM3815NrBZ0zA9wc6c/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 17, 'documento' => 'Credencial Institucional','url' =>''],
            ['puro_base' => 3, 'numero' => 18, 'documento' => 'Último Talón de Pago','url' =>''],
            ['puro_base' => 3, 'numero' => 19, 'documento' => 'Formato Ùnico de Personal (FUP) vigente','url' =>''],
            ['puro_base' => 3, 'numero' => 20, 'documento' => 'Registro Único de Actividades Académicas (RUAA)','url' =>'' ],
            ['puro_base' => 3, 'numero' => 21, 'documento' => 'Comprobante de obtención ante el SAT del la firma electrónica avanzada FIEL','url' =>''],
            ['puro_base' => 3, 'numero' => 22, 'documento' => 'Escrito que acredita la existencia y personalidad jurídica','url' =>'https://docs.google.com/document/d/1wLK5FNyFdpf2bkQUvk2uDBXDhpOSLOMw/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 23, 'documento' => 'Escrito de confidencialidad','url' =>'https://docs.google.com/document/d/1LBZjZLOMe_hGNveK4E-qg0n8axHLuVBC/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 24, 'documento' => 'Escrito de domicilio consignado, teléfono y correo','url' =>'https://docs.google.com/document/d/1c4F667tGSQPXsjTVPApKkAWn-HX5G7ss/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 25, 'documento' => 'Maniifesro bajo protesta de decir verdad artículos 50 y 60','url' =>'https://docs.google.com/document/d/1SRBKPunLSAJ-YCqZlakaQ1OWlSY22W2a/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 26, 'documento' => 'Escrito de declaración de integridad bajo protesta de decir verdad','url' =>'https://docs.google.com/document/d/1c4F667tGSQPXsjTVPApKkAWn-HX5G7ss/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 27, 'documento' => 'Escrito en el que manifiesta bajo protesta de decir verdad que es de nacionalidad mexicana','url' =>'https://docs.google.com/document/d/1OPg7bbpCgom5hycwU9auj4qWOr6WugHD/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 28, 'documento' => 'Escrito de designación de beneficiario en caso de fallecimiento','url' =>'https://docs.google.com/document/d/1TZWg_o9NUpUVJEtUEFLdwsh7lT4gqcDE/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 3, 'numero' => 29, 'documento' => 'Comprobante de alta en sistema electrónico  de información Pública Gubernamental (COMPRANET)','url' =>'https://upcp-compranet.hacienda.gob.mx/registro_empresas.html'],
            // puros
            ['puro_base' => 4, 'numero' => 1, 'documento' => 'Acta de nacimiento', 'url' =>''],
            ['puro_base' => 4, 'numero' => 2, 'documento' => 'CURP','url' =>''],
            ['puro_base' => 4, 'numero' => 3, 'documento' => 'Constancia de Situación Fiscal','url' =>'https://www.sat.gob.mx/aplicacion/login/53027/genera-tu-constancia-de-situacion-fiscal'],
            ['puro_base' => 4, 'numero' => 4, 'documento' => 'Opinion de Cumplimiento Positiva (32D)','url' =>'https://login.mat.sat.gob.mx/nidp/app/login?id=contr-dual-totp-eFirma&sid=0&option=credential&sid=0'],
            ['puro_base' => 4, 'numero' => 5, 'documento' => 'Comprobante de obtención ante el SAT del la firma electrónica avanzada FIEL','url' =>''],
            ['puro_base' => 4, 'numero' => 6, 'documento' => 'Identificación Oficial','url' =>'' ],
            ['puro_base' => 4, 'numero' => 7, 'documento' => 'Comprobante de estudios','url' =>''],
            ['puro_base' => 4, 'numero' => 8, 'documento' => 'Comprobante de domicilio','url' =>''],
            ['puro_base' => 4, 'numero' => 9, 'documento' => 'Cartilla del Servicio Militar (Hombres)','url' =>''],
            ['puro_base' => 4, 'numero' => 10, 'documento' => 'Carátula de Estado de Cuenta','url' =>''],
            ['puro_base' => 4, 'numero' => 11, 'documento' => 'Pretensiones económicas','url' =>'https://docs.google.com/document/d/1be7eJaUPxXaRGcbVb3Ve8N-X5h6gY1KZ/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 12, 'documento' => 'Informe con las actividades que va a desempeñar','url' =>'https://docs.google.com/document/d/1XrYk2462x1Lt3AIhpvof4p7W1Gk6jHyE/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true' ],
            ['puro_base' => 4, 'numero' => 13, 'documento' => 'Curriculum vitae','url' =>'' ],
            ['puro_base' => 4, 'numero' => 14, 'documento' => 'Manifiesto de particulares','url' =>'https://manifiesto.funcionpublica.gob.mx/' ],
            ['puro_base' => 4, 'numero' => 15, 'documento' => 'Escrito que acredita la existencia y personalidad jurídica','url' =>'https://docs.google.com/document/d/1wLK5FNyFdpf2bkQUvk2uDBXDhpOSLOMw/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 16, 'documento' => 'Escrito de confidencialidad','url' =>'https://docs.google.com/document/d/1LBZjZLOMe_hGNveK4E-qg0n8axHLuVBC/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 17, 'documento' => 'Escrito de domicilio consignado, teléfono y correo','url' =>'https://docs.google.com/document/d/1c4F667tGSQPXsjTVPApKkAWn-HX5G7ss/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 18, 'documento' => 'Maniifesro bajo protesta de decir verdad artículos 50 y 60','url' =>'https://docs.google.com/document/d/1SRBKPunLSAJ-YCqZlakaQ1OWlSY22W2a/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 19, 'documento' => 'Escrito de declaración de integridad bajo protesta de decir verdad','url' =>'https://docs.google.com/document/d/1c4F667tGSQPXsjTVPApKkAWn-HX5G7ss/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 20, 'documento' => 'Escrito en el que manifiesta bajo protesta de decir verdad que es de nacionalidad mexicana','url' =>'https://docs.google.com/document/d/1OPg7bbpCgom5hycwU9auj4qWOr6WugHD/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 21, 'documento' => 'Escrito de designación de beneficiario en caso de fallecimiento','url' =>'https://docs.google.com/document/d/1TZWg_o9NUpUVJEtUEFLdwsh7lT4gqcDE/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 22, 'documento' => 'Carta de Ausencia de Conflicto de Interés','url' =>'https://docs.google.com/document/d/1h8_QdOQWE_mtCrGPYC6Scv2WYF5IhPOL/edit?usp=sharing&ouid=108607327429305835209&rtpof=true&sd=true'],
            ['puro_base' => 4, 'numero' => 23, 'documento' => 'Comprobante de alta en sistema electrónico  de información Pública Gubernamental (COMPRANET)','url' =>'https://upcp-compranet.hacienda.gob.mx/registro_empresas.html'],
        ];
        foreach ($documentosNecesarios as $documentosNecesario) {
            DocumentoNecesario::create($documentosNecesario);
        }

    }
}
