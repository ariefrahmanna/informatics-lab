<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('teori_pendahuluans', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('judul');
            $table->string('sub_judul');
            $table->string('kategori');
            $table->string('deskripsi');
            $table->string('posted_at');
            $table->string('deadline_at');
        });
    }

    public function down(): void {
        Schema::dropIfExists('teori_pendahuluans');
    }
};
