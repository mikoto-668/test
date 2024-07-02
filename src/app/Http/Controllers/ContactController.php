<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
      return view('index');
    }
    public function confirm(ContactRequest $request)
    {
      $contact = $request->only(['first-name','last-name','gender', 'email', 'tel-1','tel-2','tel-3', 'address','category', 'building', 'content']);
      return view('confirm', ['contact' => $contact]);
    }
    public function store(ContactRequest $request)
    {
      $contact = $request->only(['first-name','last-name','gender', 'email', 'tel-1','tel-2','tel-3', 'address', 'building','category','content']);
      Contact::create($contact);

      return view('thanks');
    }
}