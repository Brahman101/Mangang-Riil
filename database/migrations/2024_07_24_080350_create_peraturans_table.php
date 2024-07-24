<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeraturanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peraturan', function (Blueprint $table) {
            $table->string('tipe_dokumen');
            $table->text('jenis_dokumen');
            $table->text('judul');
            $table->text('pengarang');
            $table->text('nomor_peraturan');
            $table->text('tahun_terbit');
            $table->text('singkatan_jenis');
            $table->text('tempat_penepatan');
            $table->text('tanggal_penepatan');
            $table->text('subjek');
            $table->text('sumber');
            $table->text('status');
            $table->text('bahasa');
            $table->text('lokasi');
            $table->text('bidang_hukum');
            $table->text('lampiran');
            $table->text('penandatanganan');
            $table->text('urusan_pemerintahan');
            $table->text('peraturan_terkait');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturan');
    }
};
