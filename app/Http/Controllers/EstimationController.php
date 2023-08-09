<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstimationRequest;
use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Post;
use App\Models\Service;

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

        if (in_array('Other', $parameters['disciplines']) and !$request->filled('disciplines-other') ) {
            return back()->withErrors('Please, write your discipline.')->withInput();
        }

        if ( $parameters['units'] == 'Other' and !$request->filled('units-other') ) {
            return back()->withErrors('Please, write your units.')->withInput();
        }

        if ( $parameters['language'] == 'Other' and !$request->filled('language-other') ) {
            return back()->withErrors('Please, write your language.')->withInput();
        }

        if ( $parameters['type'] == 'Other' and !$request->filled('type-other') ) {
            return back()->withErrors('Please, write your type of the building\construction.')->withInput();
        }

        if (in_array('Other', $parameters['data']) and !$request->filled('data-other') ) {
            return back()->withErrors('Please, write your incoming data variant.')->withInput();
        }

        if (in_array('Other', $parameters['cloud']) and !$request->filled('cloud-other') ) {
            return back()->withErrors('Please, write your incoming Point Cloud variant.')->withInput();
        }

        if (in_array('Other', $parameters['task']) and !$request->filled('task-other') ) {
            return back()->withErrors('Please, write your task for modeling variant.')->withInput();
        }

        if (in_array('Other', $parameters['purpose']) and !$request->filled('purpose-other') ) {
            return back()->withErrors('Please, write your purpose of the model variant.')->withInput();
        }

        if (in_array('Other', $parameters['deliverables']) and !$request->filled('deliverables-other') ) {
            return back()->withErrors('Please, write your deliverables variant.')->withInput();
        }

        if ( $parameters['version'] == 'Other' and !$request->filled('version-other') ) {
            return back()->withErrors('Please, write your Revit version variant.')->withInput();
        }

        if ( $parameters['lod'] == 'Other' and !$request->filled('lod-other') ) {
            return back()->withErrors('Please, write your LOD (Level of Detail) variant.')->withInput();
        }

        if ( $parameters['accuracy'] == 'Other' and !$request->filled('accuracy-other') ) {
            return back()->withErrors('Please, write your project accuracy variant.')->withInput();
        }

        if ( $parameters['reports'] == 'Other' and !$request->filled('reports-other') ) {
            return back()->withErrors('Please, write your providing models and / or reports to control the work process variant.')->withInput();
        }

//        dd($request->all());
        return back()->with('success', 'Estimation started');
    }
}
