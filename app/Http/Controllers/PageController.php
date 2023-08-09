<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\Star;
use App\Models\Teammate;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $achievements = Achievement::all();

        $stars = Star::all();

        $teammates = Teammate::all();

        $testimonials = Testimonial::all();

        $works = Work::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('main', compact('page_info', 'services', 'achievements', 'stars', 'teammates', 'menuItems', 'testimonials', 'works', 'contacts', 'posts'));
    }

    public function contact()
    {
        $page_info = Page::where('name', 'contacts')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('contact', compact('page_info', 'services', 'menuItems', 'contacts', 'posts'));
    }

    public function success()
    {
        $page_info = Page::where('name', 'contacts')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('success', compact('page_info', 'services', 'menuItems', 'contacts', 'posts'));
    }

    public function thanks()
    {
        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('thanks', compact( 'services', 'menuItems', 'contacts', 'posts'));
    }

    public function policy()
    {
        $page_info = Page::where('name', 'policy')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('policy', compact('page_info', 'services', 'menuItems', 'contacts', 'posts'));
    }
}
