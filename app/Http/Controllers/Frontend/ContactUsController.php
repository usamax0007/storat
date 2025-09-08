<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'development_type' => 'required|string|max:255',
        ]);

        Contact::create($validated);

        return response()->json(['success' => true, 'message' => 'Your request has been submitted successfully!']);
    }
}
