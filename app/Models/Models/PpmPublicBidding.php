<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpmPublicBidding extends Model
{
  use HasFactory;

  protected $fillable = ['bid_document', 'bid_start', 'bid_end', 'bid_status'];
}
