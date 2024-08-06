<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceMenuItem;
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

        $posts = Post::orderBy('id')->paginate(6);

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('blog', compact('page_info', 'posts', 'services', 'menuItems', 'contacts', 'og', 'service_menu_items'));
    }

    public function show($slug, Request $request)
    {
        $og = null;
        $prev = null;
        $next = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $post = Post::where('slug', $slug)->first();
        $allPosts = Post::all()->count();

        if ($post->id == 1 ) {
            $next = Post::where('id', $post->id + 1)->first();
        } elseif($post->id == $allPosts) {
            $prev = Post::where('id', $post->id - 1)->first();
        } else {
            $prev = Post::where('id', $post->id - 1)->first();
            $next = Post::where('id', $post->id + 1)->first();
        }

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('post', compact('post', 'services', 'menuItems', 'contacts', 'posts', 'og', 'prev', 'next', 'service_menu_items'));
    }
}
