<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PeraturanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tipe_dokumen' => $this->tipe_dokumen,
            'jenis_dokumen' => $this->jenis_dokumen,
            'judul' => $this->judul,
            'pengarang' => $this->author->name,
            'nomor_peraturan' => $this->nomor_peraturan,
            'tahun_terbit' => $this->tahun_terbit,
            'singkatan_jenis' => $this->singkatan_jenis,
            'tempat_penepatan' => $this->tempat_penepatan,
            'tanggal_penepatan' => $this->tanggal_penepatan,
            'subjek' => $this->subjek,
            'tahun_terbit' => $this->tahun_terbit,
            'sumber' => $this->sumber,
            'status' => $this->status,
            'bahasa' => $this->bahasa,
            'lokasi' => $this->lokasi,
            'bidang_hukum' => $this->bidang_hukum,
            'lampiran' => $this->lampiran,
            'penandatanganan' => $this->penandatanganan,
            'urusan_pemerintahan' => $this->urusan_pemerintahan,
            'peraturan_terkait' => $this->peraturan_terkait,
        ];
    }
}
