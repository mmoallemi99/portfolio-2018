<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Mail\SendToMe;
use App\Mail\SendToClient;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function store(Request $request) {
    	$request->validate([
        	'name' => 'required|max:255|string',
        	'email' => 'required|email',
        	'message' => 'required'
    	]);

    	$contact = new Contact;
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->message = $request->message;
    	$contact->save();

        Mail::to('a.perrier721@gmail.com')->queue(new SendToMe($contact));
        Mail::to('a.perrier721@gmail.com')->queue(new SendToClient($contact));

    	return response()->json([
    		'contact' => $contact
    	]);
    }
}
