<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use Leeto\Seo\Models\Seo;

class PostController extends Controller
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

        $page_info = Page::where('name', 'blog')->first();

        $posts = Post::orderBy('id', 'desc')->paginate(6);

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        return view('blog', compact('page_info', 'posts', 'services', 'menuItems', 'contacts', 'og'));
    }

    public function show($slug, Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $post = Post::where('slug', $slug)->first();

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('post', compact('post', 'services', 'menuItems', 'contacts', 'posts', 'og'));
    }
}
