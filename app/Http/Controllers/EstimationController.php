<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstimationRequest;
use App\Models\Contact;
use App\Models\Estimation;
use App\Models\MenuItem;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class EstimationController extends Controller
{
    public function show()
    {
        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        return view('estimates', compact( 'services', 'menuItems', 'contacts', 'posts'));
    }

    public function processing(EstimationRequest $request)
    {
        $parameters = $request->all();

        unset($parameters['files']);

        $files = [];

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/images/upload/', $name);
                $files[] = $name;
            }
            $parameters['files'] = $files;
        }

        Estimation::create($parameters);

        return redirect()->route('thanks');
    }
}
