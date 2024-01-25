<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(Request $request)
  {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
    return view('confirm', ['contact' => $contact]);
  }

  public function store()
  {
    $contact = $request->only(['name', 'email', 'tel', 'contact']);
    Contact::create($contact);
    return view('thanks');
  }


}