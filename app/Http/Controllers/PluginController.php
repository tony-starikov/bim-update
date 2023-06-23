<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Plugin;
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

        return view('products', compact('page_info', 'plugins', 'services', 'menuItems', 'contacts'));
    }

    public function downloadPlugin(Plugin $plugin)
    {
        return response()->download('images/' . $plugin->file);
    }
}
