<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
protected $fillable = [
  'price', 'category_id', 'modality_id'
];
    public function category(){
      return $this->belongsTo(Category::class, 'category_id');
    }
    public function modality(){
      return $this->belongsTo(Modality::class, 'modality_id');
    }
}
