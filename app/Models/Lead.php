<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'email', 'phone','gender', 'dob', 'interest_package', 'branch_id'];

     
    // Relation With Reminders
    public function reminder()
    {
         return $this->hasMany(Reminder::class)->latest();
    } 
}
