<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// API routes for form submissions
Route::post('/api/contact', function (Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'service' => 'nullable|string',
        'message' => 'nullable|string'
    ]);

    // Process contact form (save to database, send email, etc.)
    // Mail::to('info@tamnhinthegioi.com')->send(new ContactFormMail($validated));

    return response()->json(['message' => 'Yêu cầu đã được gửi thành công!']);
});

Route::post('/api/newsletter', function (Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'email' => 'required|email'
    ]);

    // Process newsletter subscription
    // Newsletter::create($validated);

    return response()->json(['message' => 'Đăng ký newsletter thành công!']);
});