<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nome'];
}
