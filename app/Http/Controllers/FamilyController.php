<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Family;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceMenuItem;
use Illuminate\Http\Request;
use Leeto\Seo\Models\Seo;

class FamilyController extends Controller
{
    public function index(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'families')->first();

        $families = Family::orderBy('id', 'desc')->get();

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('families', compact('page_info', 'families', 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function downloadFamily($slug)
    {
        $family = Family::where('slug', $slug)->first();

        return response()->download('images/' . $family->file);
    }
}
