<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public function details()
  {
    return $this->hasOne(AuthorDetail::class);
  }
}
