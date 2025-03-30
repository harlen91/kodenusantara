<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workshop extends Model
{
    use SoftDeletes;

    protected $table = 'workshops';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'harga', 'des', 'thumbnail'];
}
