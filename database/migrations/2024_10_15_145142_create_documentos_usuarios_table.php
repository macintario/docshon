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
       CREATE OR REPLACE VIEW documentos_usuarios as
      SELECT 
        u.id, name, u.tipo, paterno, materno, nombres, rfc, count(c.id) as numero_documentos
        FROM users as u
        left join documento_cargados as c
        on u.id = c.user_id
        group by u.id, u.tipo, name, paterno, materno, nombres, rfc
       ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('Drop view if exists documentos_usuarios');
    }
};
