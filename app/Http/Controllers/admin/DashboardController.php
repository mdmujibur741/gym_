<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
use Inertia\Inertia;


class DashboardController extends Controller
{
    public function index()
    {
        $macAddr = exec('getmac');
        // $ip = $request
        // return $ipAddr;
        return Inertia::render('Dashboard');
    }
}
