<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'website_url' => 'required|url',
            'da' => 'required|numeric',
            'dr' => 'required|numeric',
            'traffic' => 'required|numeric',
            'niche' => 'required|string',
        ]);

        // Create a new website record
        $website = new Website();
        $website->url = $request->input('website_url');
        $website->da = $request->input('da');
        $website->dr = $request->input('dr');
        $website->traffic = $request->input('traffic');
        $website->niche = $request->input('niche');
        $website->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
}