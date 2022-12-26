<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AboutController extends Controller
{
     public function index()
     {
          $about = AboutResource::collection(About::all());
          return Inertia::render('admin/setting/about/index', compact('about'));
     }

     public function store(Request $request)
     {
          $request->validate([
               'title' => 'required|min:6',
               'description' => 'required|min:15',
               'image' => 'required',
          ]);

          $image = $request->file('image')->store('image');

          About::create([
               'title' => $request->title,
               'description' => $request->description,
               'image' => $image,
          ]);

          return Redirect::back();
     }


     public function edit(About $about)
     {
          return Inertia::render('admin/setting/about/edit', compact('about'));
     }


     public function update(Request $request, About $about)
     {
          $request->validate([
               'title' => 'required|min:6',
               'description' => 'required|min:15',
          ]);

          $image = $about->image;
          if ($request->hasFile('image')) {
               if ($about->image ==!null) {
                    Storage::delete($image);
               }
               $image = $request->file('image')->store('image');
          }

          $about->update([
               'title' => $request->title,
               'description' => $request->description,
                'image' => $image,
          ]);

          return Redirect::route('admin.about.index');
     }
}
