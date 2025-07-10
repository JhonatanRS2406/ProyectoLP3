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
        Schema::create('notificacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("mensaje");
            $table->date("fechaNotificacion");
            $table->foreignId('idUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('idTarea')->constrained('tareas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacions');
    }
};
