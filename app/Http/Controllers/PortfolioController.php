<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;
use Leeto\Seo\Models\Seo;

class PortfolioController extends Controller
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

        $page_info = Page::where('name', 'portfolio')->first();

        $posts = Post::orderBy('id', 'desc')->paginate(6);

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $projects = Work::all();

        return view('portfolio.index', compact('page_info', 'posts', 'services', 'menuItems', 'contacts', 'og', 'projects'));
    }

    public function project($slug, Request $request)
    {
        $project = Work::where('slug', $slug)->first();

        $other_projects = Work::inRandomOrder()->limit(3)->get();

        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('portfolio.project', compact('services', 'menuItems', 'contacts', 'posts', 'og', 'project', 'other_projects'));
    }
}
