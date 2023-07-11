<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Service;
use App\Models\Star;
use App\Models\Teammate;
use App\Models\Testimonial;
use App\Models\Work;
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

    public function showService($slug)
    {
        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $works = Work::where('department', 'scan-to-bim')->get();

//        $service = Service::where('slug', $slug)->first();

        $contacts = Contact::all();

        return view('services.scan_to_bim', compact('menuItems', 'services', 'contacts', 'page_info', 'works'));
    }
}
