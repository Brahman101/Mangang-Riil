<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'tipe_dokumen',
        'jenis_dokumen',
        'judul',
        'pengarang',
        'nomor_peraturan',
        'tahun_terbit',
        'singkatan_jenis',
        'tempat_penepatan',
        'tanggal_penepatan',
        'subjek',
        'sumber',
        'status',
        'bahasa',
        'lokasi',
        'bidang_hukum',
        'lampiran',
        'penandatanganan',
        'urusan_pemerintahan',
        'peraturan_terkait',
    ];
}
