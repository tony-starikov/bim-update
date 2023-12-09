<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Family;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
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

        $families = Family::orderBy('id', 'desc')->paginate(6);

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('families', compact('page_info', 'families', 'services', 'menuItems', 'contacts', 'posts', 'og'));
    }

    public function downloadFamily($slug)
    {
        $family = Family::where('slug', $slug)->first();

        return response()->download('images/' . $family->file);
    }
}
