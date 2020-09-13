<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auto extends Model
{
    use SoftDeletes;
    protected $table = 'autos';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'modelo',
        'year',
        'id_marca'
    ];
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
