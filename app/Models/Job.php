<?php

namespace App\Models;

use Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  use HasFactory;
  protected $table = 'job_listings';

  protected $guarded = [];

  public function faction()
  {
    return $this->belongsTo(Faction::class);
  }

  public function role()
  {
    return $this->belongsToMany(Role::class, foreignPivotKey:'job_listing_id');
  }

}
