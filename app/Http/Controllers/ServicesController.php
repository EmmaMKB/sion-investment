<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Foundation\Vite;
use Illuminate\Http\Request;
use Illuminate\View\View as IlluminateView;
use Spatie\FlareClient\View;

class ServicesController extends Controller
{
    function index(): ContractsView
    {
        $json = file_get_contents(storage_path('json/services.json'));
        $data = json_decode($json, true);
        $services = $data['services'];

        return view('services.index', [
            'services' => $services
        ]);
    }

    function get($slug) : ContractsView
    {
        $json = file_get_contents(storage_path('json/services.json'));
        $data = json_decode($json, true);
        $services = $data['services'];
        $service = null;

        foreach ($services as $s) {
            if ($s['slug'] === $slug) {
                $service = $s;
                break;
            }
        }

        if (!$service) {
            abort(404);
        }

        $otherServices = array_values(array_filter($services, function ($s) use ($slug) {
            return ($s['slug'] ?? null) !== $slug;
        }));

        return view('services.details', [
            'service' => $service,
            'otherServices' => $otherServices
        ]);

    }
}
