<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desconto extends Model
{
    use HasFactory;
    protected $table = 'descontos';
    protected $fillable = ['descricao', 'valor'];

    public function produtos()
    {
        return $this->hasMany('App\Models\Produto');
    }
}
