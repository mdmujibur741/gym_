<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lead extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['name', 'age', 'email', 'phone','gender', 'dob', 'interest_package', 'branch_id'];

     
    // Relation With Reminders
    public function reminder()
    {
         return $this->hasMany(Reminder::class)->latest();
    } 

    // Relation With Package
    public function package()
    {
         return $this->belongsTo(Package::class,'package_id');
    }


}
