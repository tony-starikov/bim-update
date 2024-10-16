<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceMenuItem;
use App\Models\Star;
use App\Models\Teammate;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;
use Leeto\Seo\Models\Seo;

class ServiceController extends Controller
{
    public function downloadService($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        if (!$service->presentation) {
            return abort(404);
        }

        $myFile = 'images/' . $service->presentation;

        $headers = ['Content-Type: application/pdf'];

        return response()->file($myFile, $headers);
    }

    public function showService(Request $request, $slug)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $service = Service::where('slug', $slug)->firstOrFail();

        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $works = Work::where('department', $slug)->get();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('services.main_template', compact('menuItems', 'services', 'contacts', 'page_info', 'works', 'posts', 'service', 'og', 'service_menu_items'));
    }
}
