<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  // short method te get incomplete tasks,
  // uses a query scope (anything preceding with scope is a query scope)
  // query scopes are wrappers around queries
  public function scopeIncomplete($query)
  {
    return $query->where('completed', 0);
  }
}
