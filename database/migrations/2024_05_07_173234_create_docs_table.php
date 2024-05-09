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
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('titulo')->nullable();
            $table->string('autores')->nullable();
            $table->text('resumo')->nullable();
            $table->string('palavras_chave')->nullable();
            $table->date('data_publicacao')->nullable();
            $table->enum('formato_documento', ['pdf', 'docx', 'epub'])->default('pdf');
            $table->string('categoria')->nullable();
            $table->string('capa')->nullable(); // Se estiver armazenando o caminho da imagem
            $table->string('pdf')->nullable(); // Se estiver armazenando o caminho do arquivo PDF
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs');
    }
};
