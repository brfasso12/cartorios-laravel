<?php

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
        Schema::table('cartorios', function (Blueprint $table) {
            // 1 = ativo, 0 = inativo
            $table->boolean('ativo')->default(1);
        });
    }
    
    public function down(): void
    {
        Schema::table('cartorios', function (Blueprint $table) {
            $table->dropColumn('ativo');
        });
    }
};