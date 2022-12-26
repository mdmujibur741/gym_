<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
         $contacts = ContactResource::collection(Contact::latest()->paginate(20));
        return Inertia::render('admin/contact/index',compact('contacts'));
    }



    public function destroy(Contact $contact)
    {
        $contact->delete();
          return Redirect::back();
    }



    
}
