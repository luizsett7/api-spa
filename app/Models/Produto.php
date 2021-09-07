<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['nome', 'campanha_id', 'desconto_id'];

    public function campanha()
    {
        return $this->belongsTo('App\Models\Campanha');
    }

    public function desconto()
    {
        return $this->belongsTo('App\Models\Desconto');
    }
}
