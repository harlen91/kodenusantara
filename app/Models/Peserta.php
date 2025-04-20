<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peserta extends Model
{
    use SoftDeletes;

    protected $table = 'pesertas';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'workshop_id', 'kode', 'nama_depan', 'nama_belakang', 'email', 'ponsel', 'bank', 'rekening', 'nominal', 'resi', 'keterangan', 'status', 'token'];

    public function workshop(): BelongsTo
    {
        return $this->belongsTo(Workshop::class);
    }
}
