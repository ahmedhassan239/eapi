<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function reviews()/*product can have many meviews*/
   {
   	 return $this->hasMany(Review::class);
   }
}
