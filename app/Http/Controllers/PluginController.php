<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Plugin;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceMenuItem;
use Illuminate\Http\Request;
use Leeto\Seo\Models\Seo;

class PluginController extends Controller
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

        $page_info = Page::where('name', 'plugins')->first();

        $plugins = Plugin::all();

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('plugins', compact('page_info', 'plugins', 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function downloadPlugin($slug)
    {
        $plugin = Plugin::where('slug', $slug)->first();

        return response()->download('images/' . $plugin->file);
    }
}
