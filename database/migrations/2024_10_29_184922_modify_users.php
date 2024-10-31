<?php

use App\Models\RegimenFiscal;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('curp')->default('CURP');
            $table->string('direccion')->default('direccion');
            $table->string('correo_alterno')->nullable();
            $table->foreignId('jefe_directo_id')->references('id')->on('autoridades')->default(1);
            $table->foreignId('jefe_departamento_id')->references('id')->on('autoridades')->default(1);
            $table->longText('actividades_mensuales')->nullable();
            $table->longText('actividades_anuales')->nullable();
            $table->foreignIdFor(RegimenFiscal::class)->default(1);
            $table->string('telefono_celular')->default('00');
            $table->string('telefono_casa')->default('00');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
