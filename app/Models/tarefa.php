<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarefa extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $primarykey = 'id';

    protected $fillable = [

        'descricao',
        'categoria',
        'concluido',
        'data'
    ];
}
