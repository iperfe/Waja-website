<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReceived;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'nullable|string|max:50',
            'message'=>'required|string'
        ]);

        // Optionally store to DB (create migration+model 'contacts')
        // \App\Models\Contact::create($data);

        // Send mail to company inbox
        Mail::to('wajainsurance@wajageneral.co.tz')->send(new ContactReceived($data));

        return back()->with('success','Message sent. We will contact you shortly.');
    }
}
