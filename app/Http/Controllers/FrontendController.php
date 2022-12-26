<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutResource;
use App\Http\Resources\HomeResource;
use App\Http\Resources\ProvideResource;
use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Provide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class FrontendController extends Controller
{
   public function index()
   {
      $homes = HomeResource::collection(Home::all());
      $provide = ProvideResource::collection(Provide::all());
      return Inertia::render('Frontend/index', compact('homes', 'provide',));
   }

   public function about()
   {
      $about = AboutResource::collection(About::first()->get());
      return Inertia::render('Frontend/about', compact('about'));
   }

   public function contact()
   {
      return Inertia::render('Frontend/contact');
   }


   public function store(Request $request)
   {
      $request->validate([
         'name' => 'required',
         'phone' => 'required',
         'message' => 'required|min:15',
 ]);

      Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
      ]);
      return Redirect::back();
         }
}
