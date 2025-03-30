<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tim extends Model
{
    use SoftDeletes;

    protected $table = 'tims';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'jabatan', 'foto'];
}
