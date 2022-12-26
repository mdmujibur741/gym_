<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReminderResource;
use App\Models\Lead;
use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ReminderController extends Controller
{
    public function index()
    {
           $reminders = ReminderResource::collection(Reminder::with('lead')->OrderBy('reminder_date', 'ASC')->paginate(15));
           return Inertia::render('admin/reminder/index',compact('reminders'));
    }

    public function edit(Reminder $reminder)
    {
          return Inertia::render('admin/reminder/edit',compact('reminder'));
    }

    public function update(Request $request, Reminder $reminder)
    {

        $request->validate([
            'lead_id' => 'required',
             'reminder_date' => 'required|date',
             'status' => 'required',
       ]);
        $reminder->update([
            'reminder' => $request->reminder,
            'user_id' => auth()->user()->id,
            'reminder_date' => $request->reminder_date,
            'note' => $request->note,
            'status' => $request->status,
        ]);

        return Redirect::route('admin.reminder.index');
    }


    public function destroy(Reminder $reminder)
    {
          $reminder->delete();
          return Redirect::back();
    }

    public function show($id)
    {
        # code...
    }
}
