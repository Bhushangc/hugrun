<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = ContactUs::all();
        return view('admin.contact.index',compact('contacts'));
    }
}
