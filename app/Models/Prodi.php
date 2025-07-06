<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
    //
    protected $table = 'prodi';
    use SoftDeletes;
    protected $fillable = [
        'nama',
        'kaprodi',
        'jurusan',
    ];
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    
    
}

