<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //

// Validate the request data
$data = $request->validate([
    'name' => 'required',
    'email' => 'required|email',
    'message' => 'required|min:6',
]);


return back()->withSuccess('success', 'Thank you for your message. We will get back to you soon!');


    }
}
