<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceMenuItem;
use App\Models\Star;
use App\Models\Teammate;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;
use Leeto\Seo\Models\Seo;

class PageController extends Controller
{
    public function main(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::where('show_on_main_page', 1)->orderBy('order')->take(5)->get();

        $achievements = Achievement::all();

        $stars = Star::all();

        $teammates = Teammate::all();

        $testimonials = Testimonial::all();

        $works = Work::take(3)->get();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('main', compact('page_info', 'services', 'achievements', 'stars', 'teammates', 'menuItems', 'testimonials', 'works', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function contact(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'contact')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('contact', compact('page_info', 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function bookMeeting(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'contact')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('bookMeeting', compact('page_info', 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function docs(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'contact')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('docs', compact('page_info', 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function thank_you(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'thank-you-page')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('thanks', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og', 'service_menu_items'));
    }

    public function policy(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'policy')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('policy', compact('page_info', 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function test()
    {
        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('test', compact('services', 'menuItems', 'contacts', 'posts', 'page_info', 'service_menu_items'));
    }

    public function content()
    {
        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('content', compact('services', 'menuItems', 'contacts', 'posts', 'page_info', 'service_menu_items'));
    }

    public function architectural(Request $request)
    {
        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('architectural', compact('services', 'menuItems', 'contacts', 'posts', 'page_info', 'service_menu_items'));
    }

    public function services(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $achievements = Achievement::all();

        $page_info = Page::where('name', 'services')->first();

        $menuItems = MenuItem::all();

        $services = Service::where('show_on_main_page', 1)->orderBy('order')->get();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('services', compact('page_info', 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items', 'achievements'));
    }
}
