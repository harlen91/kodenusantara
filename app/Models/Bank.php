<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;

    protected $table = 'banks';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'rekening', 'atas_nama'];
}
