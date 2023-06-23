<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function downloadService($slug)
    {
        $service = Service::where('slug', $slug)->first();

        $myFile = 'images/' . $service->presentation;

        $headers = ['Content-Type: application/pdf'];

        return response()->file($myFile, $headers);
    }
}
