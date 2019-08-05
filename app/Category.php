<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'title', 'description'
    ];

    public function subscription(){
      return $this->hasMany(Subscription::class, 'category_id');
    }
    public function book(){
      return $this->hasMany(Book::class, 'category_id');
    }
}
