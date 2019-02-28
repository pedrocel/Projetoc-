<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
      protected $table = 'perfil';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function mapeamentoPerfil(){

      return $this->belongsTo(UsuarioPerfil::class, 'perfil_id', 'id');
    }
}
