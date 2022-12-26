<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provide extends Model
{
    use HasFactory;

    protected $fillable = [ 'title_1stLine', 'title', 'point_one', 'point_two', 'point_three','point_four','image' ];
}
