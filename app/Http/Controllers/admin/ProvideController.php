<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvideResource;
use App\Models\Provide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProvideController extends Controller
{
    public function index()
    {
         $provides = ProvideResource::collection(Provide::all());
        return Inertia::render('admin/setting/provide/index',compact('provides'));
    }

    public function store(Request $request)
    {


           $request->validate([
                'title_1stLine' => 'required',
                'title' => 'required',
                'point_one' => 'required',
                'point_two' => 'required',
                'point_three' => 'required',
                'point_four' => 'required',
                'image' => 'required',
           ]);
  
           $image = $request->file('image')->store('image');
           Provide::create([
                'title_1stLine' => $request->title_1stLine,
                'title' => $request->title,
                'point_one' => $request->point_one,
                'point_two' => $request->point_two,
                'point_three' => $request->point_three,
                'point_four' => $request->point_four,
                'image' => $image,

           ]);

    }

    public function edit(Provide $provide)
    {
           return Inertia::render('admin/setting/provide/edit',compact('provide'));
    }

    public function update(Request $request, Provide $provide)
    {
        $request->validate([
            'title_1stLine' => 'required',
            'title' => 'required',
            'point_one' => 'required',
            'point_two' => 'required',
            'point_three' => 'required',
            'point_four' => 'required',
       ]);

       $image = $provide->image;
        if($request->hasFile('image')){
              if($provide->image ==!null){
                  Storage::delete($image);
              }
         $image = $request->file('image')->store('image');
        }

        $provide->update([
            'title_1stLine' => $request->title_1stLine,
            'title' => $request->title,
            'point_one' => $request->point_one,
            'point_two' => $request->point_two,
            'point_three' => $request->point_three,
            'point_four' => $request->point_four,
            'image' => $image,
        ]);
      
        return Redirect::route('admin.provide.index');
    }
}
