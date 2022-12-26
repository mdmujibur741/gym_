<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'phone', 'email', 'facebook', 'twitter','youtube','instagram', 'linkedin', 'op_time','cl_time'];
}
