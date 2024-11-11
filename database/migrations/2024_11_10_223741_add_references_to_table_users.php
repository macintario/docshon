<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\RegimenFiscal;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreignId('jefe_directo_id')->references('id')->on('autoridades')->default(1);
            $table->foreignId('jefe_departamento_id')->references('id')->on('autoridades')->default(1);
            $table->foreignIdFor(RegimenFiscal::class)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_users', function (Blueprint $table) {
            //
        });
    }
};
