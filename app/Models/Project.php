<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'title', 'description'];

    // metodo que sobreescribe retorno, para url amigable (Route Model Binding)
    public function getRouteKeyName(){
        return 'url';
    }
}
