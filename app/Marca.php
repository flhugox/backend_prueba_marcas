<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marca extends Model
{
    //
    use SoftDeletes;

    protected $table = 'marcas';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'id',
        'marca',
        'representante'
    ];
}
