<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    use HasFactory;
    protected $table = 'campanhas';
    protected $fillable = ['nome', 'ativo', 'grupo_id'];

    public function produtos()
    {
        return $this->hasMany('App\Models\Produto');
    }
}
