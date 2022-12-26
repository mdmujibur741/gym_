<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class HomeController extends Controller
{
    
    public function index()
    {
        $home = HomeResource::collection(Home::all());
        return Inertia::render('admin/setting/home/index',compact('home'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:15',
        ]);

            $image = $request->file('image')->store('image');
            Home::create([
                 'title' => $request->title,
                 'description' => $request->description,
                 'image' => $image,
            ]);
          return Redirect::route('admin.home.index');
        
    }


    public function edit(Home $home)
    {
            return Inertia::render('admin/setting/home/edit',compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:15',
        ]);

           $image = $home->image;
           if ($request->hasFile('image')) {
                if($home->image ==!null){
                    Storage::delete($image);
                }
               $image = $request->file('image')->store('image');
           }

           $home->update([
               'title' => $request->title,
               'description' => $request->description,
               'image' => $image
           ]);
        return Redirect::route('admin.home.index');
    }
}
