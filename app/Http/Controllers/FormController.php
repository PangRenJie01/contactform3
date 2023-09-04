<?php

// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormEntry;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'remark' => 'required',
        ]);

        // Create a new form entry
        FormEntry::create($validatedData);

        return redirect()->route('form.show')->with('success', 'Form submitted successfully!');
    }
}

