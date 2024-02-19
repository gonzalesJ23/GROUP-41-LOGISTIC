<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpmSmallValueProcurement extends Model
{
  use HasFactory;

  protected $table = 'ppm_small_value_procurements';

  protected $fillable = ['date_published', 'proponent_requests', 'rfq_number', 'title', 'submission_deadline'];
}
