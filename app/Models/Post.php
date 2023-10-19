<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['imagen','titulo','contenido','url', 'categoria_id','descripcion','posted'];
    /**
     * Summary of category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria(){
        // dd( $this->belongsTo(Category::class));
 
         return $this->belongsTo(Category::class);
     }
}
