<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'autor', 'category_id', 'modality_id'];
    public function category(){
      return $this->belongsTo(Category::class, 'category_id');
    }
}
