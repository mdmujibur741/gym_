<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'lead_id', 'reminder_date', 'reminder', 'note', 'status'];

    protected $dates = ['reminder_date','created_at', 'updated_at'];



    // Relation With Lead Table
    public function lead()
    {
          return $this->belongsTo(Lead::class, 'lead_id');
    }
}
