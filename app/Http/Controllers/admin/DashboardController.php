<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReminderResource;
use App\Models\Lead;
use App\Models\Package;
use App\Models\Reminder;
use Illuminate\Http\Request;
use Inertia\Inertia;


class DashboardController extends Controller
{
    public function index()
    {
        $macAddr = exec('getmac');
        $countRem = Reminder::all()->count();
        $countLea = Lead::all()->count();
        $countPac = Package::all()->count();
        $latestRem = ReminderResource::collection(Reminder::with('lead')->latest()->take(10)->get());
        return Inertia::render('admin/Dashboard',compact('countRem','countLea','countPac','latestRem'));
    }
}
