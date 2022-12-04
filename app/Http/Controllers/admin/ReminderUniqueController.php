<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ReminderUniqueController extends Controller
{
    public function create($lead)
    {
        return Inertia::render('admin/reminder/create',compact('lead'));
    }

    public function store(Request $request)
    {
          $request->validate([
               'lead_id' => 'required',
                'reminder_date' => 'required|date',
                'status' => 'required',
          ]);

          Reminder::create([
              'user_id' => auth()->user()->id,
              'lead_id' => $request->lead_id,
               'reminder' => $request->reminder,
               'reminder_date' => $request->reminder_date,
               'note' => $request->note,
               'status' => $request->status,
          ]);

          return Redirect::back();
    }
}
