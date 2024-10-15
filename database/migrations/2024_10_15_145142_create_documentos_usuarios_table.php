<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
       CREATE OR REPLACE VIEW documentos_usuarios_view as
      SELECT 
        u.id, name, paterno, materno, nombres, rfc, count(c.id) as numero_documentos
        FROM docshon.users as u
        left join docshon.documento_cargados as c
        on u.id = c.user_id
        group by u.id, name, paterno, materno, nombres, rfc
       ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statemet('Drop view if exists documentos_usuarios_view');
    }
};
