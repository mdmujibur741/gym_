<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Lead;
use Redirect;
use App\Http\Resources\LeadResource;

class LeadController extends Controller
{
    public function index()
    {
        $leads = LeadResource::collection(Lead::latest()->paginate(15));
        return Inertia::render('admin/lead/index',compact('leads'));
    }

    public function create()
    {
        return Inertia::render('admin/lead/create');
    }

    public function store(Request $request)
    {
       $leadData =  $request->validate([
              'name' => 'required|min:3',
              'email' => 'required|email',
              'phone' => 'required|min:11|max:15',
              'gender' => 'required',
              'age' => 'required|integer',
              'dob' => 'required|date',
              'interest_package' => 'required',

        ],[
               'name.required' => 'Dude You Must Fill Name Input',
               'email.required' => 'Dude You Must Fill Email Input',
               'phone.required' => 'Dude You Must Fill Phone Number',
               'gender.required' => 'Dude You Must Fill Gender ',
               'age.required' => 'Dude You Must Fill Age',
               'dob.required' => 'Dude You Must Fill Date Of Birth Input',
               'interest_package.required' => 'Dude You Must Fill Interest Package',
        ]);

         $lead = new Lead();
         $lead->fill($leadData);
         $lead->user_id = auth()->user()->id;
         $lead->branch_id =1;
         $lead->save();
         return Redirect::back();
        

    }


    public function edit(Lead $lead)
    {
         
        return Inertia::render('admin/lead/edit',compact('lead'));
    }


    public function update(Request $request, Lead $lead)
    {

       
        $leadData =  $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:15',
            'gender' => 'required',
            'age' => 'required|integer',
            'dob' => 'required|date',
            'interest_package' => 'required',

      ],[
             'name.required' => 'Dude You Must Fill Name Input',
             'email.required' => 'Dude You Must Fill Email Input',
             'phone.required' => 'Dude You Must Fill Phone Number',
             'gender.required' => 'Dude You Must Fill Gender ',
             'age.required' => 'Dude You Must Fill Age',
             'dob.required' => 'Dude You Must Fill Date Of Birth Input',
             'interest_package.required' => 'Dude You Must Fill Interest Package',
      ]);

      $lead->fill($leadData);
      $lead->user_id = auth()->user()->id;
      $lead->branch_id =1;
      $lead->update();
      return Redirect::route('admin.lead.index');


    }

    public function destroy(Lead $lead)
    {
          $lead->delete();
          return Redirect::back();
    }
}
