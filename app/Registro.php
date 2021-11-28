<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{

    protected $primaryKey = 'id';
    protected $table = 'registros';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip',
        'timestamp',
        'operation',
        'result',
        'bonus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
}
