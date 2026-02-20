<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Serve the company profile PDF for download.
     */
    public function profile()
    {
        $filePath = public_path('assets/files/profile.pdf');

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath, 'Profil_Sion_Investment.pdf');
    }
}
