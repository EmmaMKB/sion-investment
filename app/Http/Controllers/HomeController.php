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

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['message' => 'Invalid email address'], 400);
        }

        // Save email to a file (you can also save it to a database)
        $filePath = storage_path('newsletters.txt');
        file_put_contents($filePath, $email . PHP_EOL, FILE_APPEND);

        return response()->json(['message' => 'Thank you for subscribing!']);

    }
}
