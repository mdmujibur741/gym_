<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    // Relation With Lead table
    public function lead()
    {
         return $this->hasOne(Lead::class);
    }
}
