<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //campos insertables.
    protected $fillable=['imagen','titulo','contenido','url', 'categoria_id','descripcion','posted'];
    public function categoria(){
        return $this->belongsTo(Category::class);
    }
}
