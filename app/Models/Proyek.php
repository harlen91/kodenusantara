<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyek extends Model
{
    use SoftDeletes;

    protected $table = 'proyeks';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'des', 'foto'];
}
