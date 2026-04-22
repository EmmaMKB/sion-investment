<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;


class HomeController extends Controller
{
    //

    function index() : ContractsView {

        // Load services from JSON file
        $json = file_get_contents(storage_path('json/services.json'));
        $data = json_decode($json, true);
        $services = $data['services'];

        // Get 4 random services
        $randomServices = collect($services)->random(4);

        return view('home', [
            'services' => $randomServices
        ]);
    }

    function newsletter(Request $request) {
        $email = $request->input('email');

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('home')->with('error', 'Invalid email address');
        }

        // Check if email already exists in newsletter
        $emailExists = \App\Models\Newsletter::where('email', $email)->exists();
        if ($emailExists) {
            return redirect()->route('home')->with('error', 'This email is already subscribed to the newsletter');
        }

        // Save email to newsletter
        $newsletter = new \App\Models\Newsletter();
        $newsletter->email = $email;
        $newsletter->save();

        return redirect()->route('home')->with('success', 'Vous avez souscris à la newsletter !');

    }
}
