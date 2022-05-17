<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Str;
class ContactController extends Controller
{
    public function store(Request $request)
    {
        $result=new Contact;
        $result->uuid=Str::uuid()->tostring();
        $result->name=$request->name;
        $result->email=$request->email;
        $result->company=$request->company;
        $result->help_message=$request->help_message;
        $result->save();
        return redirect()->back()->with('message', 'form submmit Succssfully');

    }
}