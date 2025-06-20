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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('cargo', 50);
            $table->string('experiencia', 100)->nullable();
            $table->string('telefono', 20);
            $table->string('ci', 20)->unique();
            $table->decimal('salario', 10, 2);
            $table->enum('estado_civil', ['soltero', 'casado', 'divorciado', 'viudo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
