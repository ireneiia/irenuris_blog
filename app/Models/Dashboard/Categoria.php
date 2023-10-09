<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //El modelo trae los datos de la tabla de la base de datos
    use HasFactory;

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
