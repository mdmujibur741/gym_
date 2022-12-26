<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\FooterResource;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class FooterController extends Controller
{
      public function index()
      {
           $footers = FooterResource::collection(Footer::all());
           return Inertia::render('admin/setting/footer/index',compact('footers'));
      }

      public function store(Request $request)
      {
              $request->validate([
                  'address' => 'required|min:5',
                  'phone' => 'required|min:11|max:17',
                  'facebook' => 'required|url',
                  'op_time' => 'required',
                  'cl_time' => 'required',
              ]);

            Footer::create([
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
                'op_time' => $request->op_time,
                'cl_time' => $request->cl_time,
            ]);
            return Redirect::back();

      }


      public function edit(Footer $footer)
      {
              return Inertia::render('admin/setting/footer/edit',compact('footer'));
      }

      public function update(Request $request, Footer $footer)
      {
            $request->validate([
                  'address' => 'required|min:5',
                  'phone' => 'required|min:11|max:17',
                  'facebook' => 'required|url',
                  'op_time' => 'required',
                  'cl_time' => 'required',
              ]);
             $footer->update([
                  'address' => $request->address,
                  'phone' => $request->phone,
                  'email' => $request->email,
                  'facebook' => $request->facebook,
                  'twitter' => $request->twitter,
                  'instagram' => $request->instagram,
                  'youtube' => $request->youtube,
                  'linkedin' => $request->linkedin,
                  'op_time' => $request->op_time,
                  'cl_time' => $request->cl_time,
             ]);

             return Redirect::route('admin.footer.index');
      }
}
