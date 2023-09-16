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

        if (in_array('Other', $parameters['disciplines']) and !$request->filled('disciplines-other') ) {
            return back()->withErrors('Please, write your discipline.')->withInput();
        } else {
            if (in_array('Other', $parameters['disciplines'])) {
                $index = array_search('Other', $parameters['disciplines']);
                unset($parameters['disciplines'][$index]);
                $parameters['disciplines'][$index] = "Other: " . $parameters['disciplines-other'];
            }
            unset($parameters['disciplines-other']);
        }

        if ( $parameters['units'] == 'Other' and !$request->filled('units-other') ) {
            return back()->withErrors('Please, write your units.')->withInput();
        } else {
            if ($parameters['units-other']) {
                $parameters['units'] = $parameters['units-other'];
            }
            unset($parameters['units-other']);
        }

        if ( $parameters['type'] == 'Other' and !$request->filled('type-other') ) {
            return back()->withErrors('Please, write your type of the building\construction.')->withInput();
        } else {
            if ($parameters['type-other']) {
                $parameters['type'] = $parameters['type-other'];
            }
            unset($parameters['type-other']);
        }

        if (in_array('Other', $parameters['data']) and !$request->filled('data-other') ) {
            return back()->withErrors('Please, write your incoming data variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['data'])) {
                $index = array_search('Other', $parameters['data']);
                unset($parameters['data'][$index]);
                $parameters['data'][$index] = "Other: " . $parameters['data-other'];
            }
            unset($parameters['data-other']);
        }

        if (in_array('Other', $parameters['cloud']) and !$request->filled('cloud-other') ) {
            return back()->withErrors('Please, write your incoming Point Cloud variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['cloud'])) {
                $index = array_search('Other', $parameters['cloud']);
                unset($parameters['cloud'][$index]);
                $parameters['cloud'][$index] = "Other: " . $parameters['cloud-other'];
            }
            unset($parameters['cloud-other']);
        }

        if (in_array('Other', $parameters['task']) and !$request->filled('task-other') ) {
            return back()->withErrors('Please, write your task for modeling variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['task'])) {
                $index = array_search('Other', $parameters['task']);
                unset($parameters['task'][$index]);
                $parameters['task'][$index] = "Other: " . $parameters['task-other'];
            }
            unset($parameters['task-other']);
        }

        if (in_array('Other', $parameters['deliverables']) and !$request->filled('deliverables-other') ) {
            return back()->withErrors('Please, write your deliverables variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['deliverables'])) {
                $index = array_search('Other', $parameters['deliverables']);
                unset($parameters['deliverables'][$index]);
                $parameters['deliverables'][$index] = "Other: " . $parameters['deliverables-other'];
            }
            unset($parameters['deliverables-other']);
        }

        if ( $parameters['version'] == 'Other' and !$request->filled('version-other') ) {
            return back()->withErrors('Please, write your Revit version variant.')->withInput();
        } else {
            if ($parameters['version-other']) {
                $parameters['version'] = $parameters['version-other'];
            }
            unset($parameters['version-other']);
        }

        if (in_array('Other', $parameters['lod']) and !$request->filled('lod-other') ) {
            return back()->withErrors('Please, write your lod variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['lod'])) {
                $index = array_search('Other', $parameters['lod']);
                unset($parameters['lod'][$index]);
                $parameters['lod'][$index] = "Other: " . $parameters['lod-other'];
            }
            unset($parameters['lod-other']);
        }

        if (in_array('Other', $parameters['loi']) and !$request->filled('loi-other') ) {
            return back()->withErrors('Please, write your loi additional parameters.')->withInput();
        } else {
            if (in_array('Other', $parameters['loi'])) {
                $index = array_search('Other', $parameters['loi']);
                unset($parameters['loi'][$index]);
                $parameters['loi'][$index] = "Other: " . $parameters['loi-other'];
            }
            unset($parameters['loi-other']);
        }

        if ($parameters['accuracy'] == 'Other' and !$request->filled('accuracy-other')) {
            return back()->withErrors('Please, write your project accuracy variant.')->withInput();
        } else {
            if ($parameters['accuracy-other']) {
                $parameters['accuracy'] = $parameters['accuracy-other'];
            }
            unset($parameters['accuracy-other']);
        }

        $files = [];

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/images/upload/', $name);
                $files[] = $name;
            }
        }

        $parameters['files'] = $files;

        Estimation::create($parameters);

        return redirect()->route('thanks');
    }
}
