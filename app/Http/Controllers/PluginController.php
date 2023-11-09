<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Plugin;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class PluginController extends Controller
{
    public function index()
    {
        $page_info = Page::where('name', 'products')->first();

        $plugins = Plugin::orderBy('id', 'desc')->paginate(6);

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('products', compact('page_info', 'plugins', 'services', 'menuItems', 'contacts', 'posts'));
    }

    public function downloadPlugin($slug)
    {
        $plugin = Plugin::where('slug', $slug)->first();

        return response()->download('images/' . $plugin->file);
    }
}
