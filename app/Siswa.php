<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
   protected $primaryKey = 'code';
    protected $table = 'siswa';

    protected $fillable = array(
        'code',
        'name',
        'department',
        'age',
        'bio'
    );

    public $timestamps = false;
    public $incrementing = true;
}
