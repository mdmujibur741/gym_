<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LeadController extends Controller
{
    public function index()
    {
          
        return Inertia::render('admin/lead/index');
    }

    public function create()
    {
        return Inertia::render('admin/lead/create');
    }
}
