<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactUsFormController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
      return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::created($request->all());

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}