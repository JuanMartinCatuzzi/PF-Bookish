<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    public function subscription(){
      return $this->hasMany(Subscription::class, 'modality_id');
    }
}
