<?php

use App\Mail\PostEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::post('/submit-order', function (Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'template' => 'required|string',
        'message' => 'required|string',
    ]);

    Mail::to('zheandrizky@gmail.com')->send(new PostEmail($validatedData));

    return redirect('/')->with('success', 'Your order has been successfully submitted!');
    
});
