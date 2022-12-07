<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\PackageResource;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Inertia\Inertia;

class PackageController extends Controller
{
    public function index()
    {
        $package_data = PackageResource::collection(Package::all()); 
        return Inertia::render('admin/package/index',compact('package_data'));
    }

    public function create()
    {
        return Inertia::render('admin/package/create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
                'name' => 'required|min:2',
                'price' => 'required|min:2',
          ]);

          $package = new Package();
         $package->fill($data)->save();
          return Redirect::back();


    }


    public function edit(Package $package)
    {
      
        return Inertia::render('admin/package/edit',compact('package'));
    }

    public function update(Request $request, Package $package)
    {
      
        $data = $request->validate([
            'name' => 'required|min:2',
            'price' => 'required|min:2',
         ]);

         $package->fill($data)->update();
         return Redirect::route('admin.package.index');

    }

    public function destroy(Package $package)
    {
          $package->delete();
          return Redirect::back();
    }
}
