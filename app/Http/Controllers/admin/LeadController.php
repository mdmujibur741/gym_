<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Lead;
use Illuminate\Support\Facades\Redirect;
use App\Http\Resources\LeadResource;
use App\Http\Resources\PackageResource;
use App\Models\Package;
use Carbon\Carbon;

class LeadController extends Controller
{
    public function index()
    {
        $leads = LeadResource::collection(Lead::with('package')->latest()->paginate(15));
        return Inertia::render('admin/lead/index',compact('leads'));
    }

    public function create()
    {
         $package = Package::all();
        return Inertia::render('admin/lead/create',compact('package'));
    }

    public function store(Request $request)
    {
        
        $leadData =  $request->validate([
              'name' => 'required|min:3',
              'email' => 'required|email',
              'phone' => 'required|min:11|max:15',
              'gender' => 'required',
              'dob' => 'required|date',
              'package_id' => 'required',

        ],[
               'name.required' => 'Dude You Must Fill Name Input',
               'email.required' => 'Dude You Must Fill Email Input',
               'phone.required' => 'Dude You Must Fill Phone Number',
               'gender.required' => 'Dude You Must Fill Gender ',
               'dob.required' => 'Dude You Must Fill Date Of Birth Input',
               'package_id.required' => 'Dude You Must Fill Interest Package',
        ]);

        
        $dob = Carbon::parse($request->dob);
         $lead = new Lead();
         $lead->fill($leadData);
         $lead->user_id = auth()->user()->id;
         $lead->package_id = $request->package_id;
         $lead->age = $dob->age;
         $lead->save();
         return Redirect::back();
        

    }

    public function show(Lead $lead)
    {

          $lead->load(['reminder','package']);
           return Inertia::render('admin/lead/show',compact('lead'));
    }


    public function edit(Lead $lead)
    {
        $package_data = PackageResource::collection(Package::all());   
        return Inertia::render('admin/lead/edit',compact('lead','package_data'));
    }


    public function update(Request $request, Lead $lead)
    {

       
        $leadData =  $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:15',
            'gender' => 'required',
            'dob' => 'required|date',
            'package_id' => 'required',

      ],[
             'name.required' => 'Dude You Must Fill Name Input',
             'email.required' => 'Dude You Must Fill Email Input',
             'phone.required' => 'Dude You Must Fill Phone Number',
             'gender.required' => 'Dude You Must Fill Gender ',
             'dob.required' => 'Dude You Must Fill Date Of Birth Input',
             'package_id.required' => 'Dude You Must Fill Interest Package',
      ]);

      $dob = Carbon::parse($request->dob);
      $lead->fill($leadData);
      $lead->user_id = auth()->user()->id;
      $lead->age = $dob->age; 
      $lead->package_id = $request->package_id;
      $lead->update();
      return Redirect::route('admin.lead.index');


    }

    public function destroy(Lead $lead)
    {
          $lead->delete();
          return Redirect::back();
    }
}
