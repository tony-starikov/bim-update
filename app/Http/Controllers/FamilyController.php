<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Family;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        $page_info = Page::where('name', 'families')->first();

        $families = Family::orderBy('id', 'desc')->paginate(6);

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('families', compact('page_info', 'families', 'services', 'menuItems', 'contacts', 'posts'));
    }

    public function downloadFamily($slug)
    {
        $family = Family::where('slug', $slug)->first();

        return response()->download('images/' . $family->file);
    }
}
