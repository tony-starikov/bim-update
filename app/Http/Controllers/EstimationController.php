<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstimationMepRequest;
use App\Http\Requests\EstimationMepShortRequest;
use App\Http\Requests\EstimationRequest;
use App\Http\Requests\EstimationScanShortRequest;
use App\Models\Contact;
use App\Models\Estimation;
use App\Models\EstimationLog;
use App\Models\EstimationMep;
use App\Models\EstimationMepShort;
use App\Models\EstimationScanShort;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceMenuItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Leeto\Seo\Models\Seo;

class EstimationController extends Controller
{
    public function show(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('estimates', compact( 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function showScanShort(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'scan-to-bim-estimates-project')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('estimatesScanShort', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og', 'service_menu_items'));
    }

    public function showServicesForm(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'estimates-project-scan-to-bim')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('estimatesServicesForm', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og', 'service_menu_items'));
    }

    public function processing(Request $request)
    {
        $log = EstimationLog::create(['email' => $request->email, 'name' => $request->name]);

        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|string|max:255',
            'disciplines' => 'required|array',
            'units' => 'required|string',
            'type' => 'required|string',
            'area' => 'required',
            'height' => 'required',
            'cloud' => 'required|array',
            'task' => 'required|array',
            'deliverables' => 'required|array',
            'version' => 'required|string',
            'lod' => 'required|array',
            'loi' => 'required|array',
            'accuracy' => 'required|string',
            'currency' => 'required|string',
            'start' => 'nullable|string',
            'address' => 'nullable|string',
            'link' => 'nullable|string',
            'comment' => 'nullable|string',
            'files' => 'nullable',
            'reference' => 'nullable|string',
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ]);

        $parameters = $request->all();

        if (in_array('Other', $parameters['disciplines']) and !$request->filled('other-discipline') ) {
            return back()->withErrors('Please, write your discipline.')->withInput();
        } else {
            if (in_array('Other', $parameters['disciplines'])) {
                $index = array_search('Other', $parameters['disciplines']);
                unset($parameters['disciplines'][$index]);
                $parameters['disciplines'][$index] = "Other: " . $parameters['other-discipline'];
            }
            unset($parameters['other-discipline']);
        }

        if ( $parameters['units'] == 'Other' and !$request->filled('other-units') ) {
            return back()->withErrors('Please, write your units.')->withInput();
        } else {
            if ($parameters['other-units']) {
                $parameters['units'] = $parameters['other-units'];
            }
            unset($parameters['other-units']);
        }

        if ( $parameters['type'] == 'Other' and !$request->filled('other-type') ) {
            return back()->withErrors('Please, write your type of the building\construction.')->withInput();
        } else {
            if ($parameters['other-type']) {
                $parameters['type'] = $parameters['other-type'];
            }
            unset($parameters['other-type']);
        }

        if (in_array('Other', $parameters['cloud']) and !$request->filled('other-cloud') ) {
            return back()->withErrors('Please, write your incoming Point Cloud variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['cloud'])) {
                $index = array_search('Other', $parameters['cloud']);
                unset($parameters['cloud'][$index]);
                $parameters['cloud'][$index] = "Other: " . $parameters['other-cloud'];
            }
            unset($parameters['other-cloud']);
        }

        if (in_array('Other', $parameters['task']) and !$request->filled('other-task') ) {
            return back()->withErrors('Please, write your task for modeling variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['task'])) {
                $index = array_search('Other', $parameters['task']);
                unset($parameters['task'][$index]);
                $parameters['task'][$index] = "Other: " . $parameters['other-task'];
            }
            unset($parameters['other-task']);
        }

        if (in_array('Other', $parameters['deliverables']) and !$request->filled('other-deliverables') ) {
            return back()->withErrors('Please, write your deliverables variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['deliverables'])) {
                $index = array_search('Other', $parameters['deliverables']);
                unset($parameters['deliverables'][$index]);
                $parameters['deliverables'][$index] = "Other: " . $parameters['other-deliverables'];
            }
            unset($parameters['other-deliverables']);
        }

        if ( $parameters['version'] == 'Other' and !$request->filled('other-version') ) {
            return back()->withErrors('Please, write your Revit version variant.')->withInput();
        } else {
            if ($parameters['other-version']) {
                $parameters['version'] = $parameters['other-version'];
            }
            unset($parameters['other-version']);
        }

        if (in_array('Other', $parameters['lod']) and !$request->filled('other-lod') ) {
            return back()->withErrors('Please, write your lod variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['lod'])) {
                $index = array_search('Other', $parameters['lod']);
                unset($parameters['lod'][$index]);
                $parameters['lod'][$index] = "Other: " . $parameters['other-lod'];
            }
            unset($parameters['other-lod']);
        }

        if (in_array('Other', $parameters['loi']) and !$request->filled('other-loi') ) {
            return back()->withErrors('Please, write your loi additional parameters.')->withInput();
        } else {
            if (in_array('Other', $parameters['loi'])) {
                $index = array_search('Other', $parameters['loi']);
                unset($parameters['loi'][$index]);
                $parameters['loi'][$index] = "Other: " . $parameters['other-loi'];
            }
            unset($parameters['other-loi']);
        }

        if ($parameters['accuracy'] == 'Other' and !$request->filled('other-accuracy')) {
            return back()->withErrors('Please, write your project accuracy variant.')->withInput();
        } else {
            if ($parameters['other-accuracy']) {
                $parameters['accuracy'] = $parameters['other-accuracy'];
            }
            unset($parameters['other-accuracy']);
        }

        if ($parameters['currency'] == 'Other' and !$request->filled('other-currency')) {
            return back()->withErrors('Please, write your project currency variant.')->withInput();
        } else {
            if ($parameters['other-currency']) {
                $parameters['currency'] = $parameters['other-currency'];
            }
            unset($parameters['other-currency']);
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

        unset($parameters['cf-turnstile-response']);

        Estimation::create($parameters);

        return redirect()->route('thanksScanToBim');
    }

    public function processingScanShort(Request $request)
    {
        $log = EstimationLog::create(['email' => $request->email, 'name' => $request->name]);

        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|string|max:255',
            'disciplines' => 'required|array',
            'type' => 'required|string',
            'area' => 'required',
            'height' => 'required',
            'task' => 'required|array',
            'lod' => 'required|array',
            'accuracy' => 'required|string',
            'currency' => 'required|string',
            'start' => 'nullable|string',
            'address' => 'nullable|string',
            'link' => 'nullable|string',
            'comment' => 'nullable|string',
            'files' => 'nullable',
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ]);

        $parameters = $request->all();

        if (in_array('Other', $parameters['disciplines']) and !$request->filled('other-discipline') ) {
            return back()->withErrors('Please, write your discipline.')->withInput();
        } else {
            if (in_array('Other', $parameters['disciplines'])) {
                $index = array_search('Other', $parameters['disciplines']);
                unset($parameters['disciplines'][$index]);
                $parameters['disciplines'][$index] = "Other: " . $parameters['other-discipline'];
            }
            unset($parameters['other-discipline']);
        }

        if ( $parameters['type'] == 'Other' and !$request->filled('other-type') ) {
            return back()->withErrors('Please, write your type of the building\construction.')->withInput();
        } else {
            if ($parameters['other-type']) {
                $parameters['type'] = $parameters['other-type'];
            }
            unset($parameters['other-type']);
        }

        if (in_array('Other', $parameters['task']) and !$request->filled('other-task') ) {
            return back()->withErrors('Please, write your task for modeling variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['task'])) {
                $index = array_search('Other', $parameters['task']);
                unset($parameters['task'][$index]);
                $parameters['task'][$index] = "Other: " . $parameters['other-task'];
            }
            unset($parameters['other-task']);
        }

        if (in_array('Other', $parameters['lod']) and !$request->filled('other-lod') ) {
            return back()->withErrors('Please, write your lod variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['lod'])) {
                $index = array_search('Other', $parameters['lod']);
                unset($parameters['lod'][$index]);
                $parameters['lod'][$index] = "Other: " . $parameters['other-lod'];
            }
            unset($parameters['other-lod']);
        }

        if ($parameters['accuracy'] == 'Other' and !$request->filled('other-accuracy')) {
            return back()->withErrors('Please, write your project accuracy variant.')->withInput();
        } else {
            if ($parameters['other-accuracy']) {
                $parameters['accuracy'] = $parameters['other-accuracy'];
            }
            unset($parameters['other-accuracy']);
        }

        if ($parameters['currency'] == 'Other' and !$request->filled('other-currency')) {
            return back()->withErrors('Please, write your project currency variant.')->withInput();
        } else {
            if ($parameters['other-currency']) {
                $parameters['currency'] = $parameters['other-currency'];
            }
            unset($parameters['other-currency']);
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

        unset($parameters['cf-turnstile-response']);

        EstimationScanShort::create($parameters);

        return redirect()->route('thanksScanToBim');
    }

    public function showMep(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('estimatesMep', compact( 'services', 'menuItems', 'contacts', 'posts', 'og', 'service_menu_items'));
    }

    public function showMepShort(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'mep-estimates-project')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('estimatesMepShort', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og', 'service_menu_items'));
    }

    public function showMepServicesForm(Request $request)
    {
        $og = null;

        if ($request->path() == '/') {
            $og = Seo::where('url', $request->path())->first();
        } else {
            $url = '/'. $request->path();
            $og = Seo::where('url', $url)->first();
        }

        $page_info = Page::where('name', 'estimates-project-mep')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $contacts = Contact::all();

        $posts = Post::take(5)->get();

        $service_menu_items = ServiceMenuItem::all()->sortBy('order');

        return view('estimatesMepServicesForm', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og', 'service_menu_items'));
    }

    public function processingMep(Request $request)
    {
        $log = EstimationLog::create(['email' => $request->email, 'name' => $request->name]);

        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'language' => 'required|string',
            'units' => 'required|string',
            'disciplines' => 'required|array',
            'services' => 'required|array',
            'lod' => 'required|string',
            'data' => 'required|array',
            'version' => 'required|string',
            'coordination' => 'nullable|array',
            'fabrication' => 'nullable|string',
            'duration' => 'required|string',
            'draftsmen' => 'nullable|string',
            'modelers' => 'nullable|string',
            'coordinators' => 'nullable|string',
            'managers' => 'nullable|string',
            'deliverables' => 'required|array',
            'downtime' => 'required|string',
            'decisions' => 'required|string',
            'reports' => 'nullable|string',
            'comment' => 'nullable|string',
            'files' => 'required|array',
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ]);

        $parameters = $request->all();

        if ( $parameters['type'] == 'Other' and !$request->filled('other-type') ) {
            return back()->withErrors('Please, write your type of the building\construction.')->withInput();
        } else {
            if ($parameters['other-type']) {
                $parameters['type'] = $parameters['other-type'];
            }
            unset($parameters['other-type']);
        }

        if ( $parameters['language'] == 'Other' and !$request->filled('other-language') ) {
            return back()->withErrors('Please, write your language.')->withInput();
        } else {
            if ($parameters['other-language']) {
                $parameters['language'] = $parameters['other-language'];
            }
            unset($parameters['other-language']);
        }

        if ( $parameters['units'] == 'Other' and !$request->filled('other-units') ) {
            return back()->withErrors('Please, write your units.')->withInput();
        } else {
            if ($parameters['other-units']) {
                $parameters['units'] = $parameters['other-units'];
            }
            unset($parameters['other-units']);
        }

        if (in_array('Other', $parameters['disciplines']) and !$request->filled('other-disciplines') ) {
            return back()->withErrors('Please, write your discipline.')->withInput();
        } else {
            if (in_array('Other', $parameters['disciplines'])) {
                $index = array_search('Other', $parameters['disciplines']);
                unset($parameters['disciplines'][$index]);
                $parameters['disciplines'][$index] = "Other: " . $parameters['other-disciplines'];
            }
            unset($parameters['other-disciplines']);
        }

        if (in_array('Other', $parameters['services']) and !$request->filled('other-service') ) {
            return back()->withErrors('Please, write your service.')->withInput();
        } else {
            if (in_array('Other', $parameters['services'])) {
                $index = array_search('Other', $parameters['services']);
                unset($parameters['services'][$index]);
                $parameters['services'][$index] = "Other: " . $parameters['other-service'];
            }
            unset($parameters['other-service']);
        }

        if ( $parameters['lod'] == 'Other' and !$request->filled('other-lod') ) {
            return back()->withErrors('Please, write your lod.')->withInput();
        } else {
            if ($parameters['other-lod']) {
                $parameters['lod'] = $parameters['other-lod'];
            }
            unset($parameters['other-lod']);
        }

        if (in_array('Other', $parameters['data']) and !$request->filled('other-data') ) {
            return back()->withErrors('Please, write your incoming data variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['data'])) {
                $index = array_search('Other', $parameters['data']);
                unset($parameters['data'][$index]);
                $parameters['data'][$index] = "Other: " . $parameters['other-data'];
            }
            unset($parameters['other-data']);
        }

        if ( $parameters['version'] == 'Other' and !$request->filled('other-version') ) {
            return back()->withErrors('Please, write your Revit version variant.')->withInput();
        } else {
            if ($parameters['other-version']) {
                $parameters['version'] = $parameters['other-version'];
            }
            unset($parameters['other-version']);
        }

        if (isset($parameters['coordination'])) {
            if (in_array('Other', $parameters['coordination']) and !$request->filled('other-coordination') ) {
                return back()->withErrors('Please, write your coordination software variant.')->withInput();
            } else {
                if (in_array('Other', $parameters['coordination'])) {
                    $index = array_search('Other', $parameters['coordination']);
                    unset($parameters['coordination'][$index]);
                    $parameters['coordination'][$index] = "Other: " . $parameters['other-coordination'];
                }
            }
        }

        unset($parameters['other-coordination']);

        if (isset($parameters['fabrication'])) {
            if ( $parameters['fabrication'] == 'Other' and !$request->filled('other-fabrication') ) {
                return back()->withErrors('Please, write your fabrication software variant.')->withInput();
            } else {
                if ($parameters['other-fabrication']) {
                    $parameters['fabrication'] = $parameters['other-fabrication'];
                }
            }
        }

        unset($parameters['other-fabrication']);



        if (isset($parameters['duration'])) {
            if ( $parameters['duration'] == 'Other' and !$request->filled('other-duration') ) {
                return back()->withErrors('Please, write your duration variant.')->withInput();
            } else {
                if ($parameters['other-duration']) {
                    $parameters['duration'] = $parameters['other-duration'];
                }
            }
        }

        unset($parameters['other-duration']);

        if (isset($parameters['draftsmen'])) {
            if ( $parameters['draftsmen'] == 'Other' and !$request->filled('other-draftsmen') ) {
                return back()->withErrors('Please, write your draftsmen variant.')->withInput();
            } else {
                if ($parameters['other-draftsmen']) {
                    $parameters['draftsmen'] = $parameters['other-draftsmen'];
                }
            }
        }

        unset($parameters['other-draftsmen']);

        if (isset($parameters['modelers'])) {
            if ( $parameters['modelers'] == 'Other' and !$request->filled('other-modelers') ) {
                return back()->withErrors('Please, write your modelers variant.')->withInput();
            } else {
                if ($parameters['other-modelers']) {
                    $parameters['modelers'] = $parameters['other-modelers'];
                }
            }
        }

        unset($parameters['other-modelers']);

        if (isset($parameters['coordinators'])) {
            if ( $parameters['coordinators'] == 'Other' and !$request->filled('other-coordinators') ) {
                return back()->withErrors('Please, write your coordinators variant.')->withInput();
            } else {
                if ($parameters['other-coordinators']) {
                    $parameters['coordinators'] = $parameters['other-coordinators'];
                }
            }
        }

        unset($parameters['other-coordinators']);

        if (isset($parameters['managers'])) {
            if ( $parameters['managers'] == 'Other' and !$request->filled('other-managers') ) {
                return back()->withErrors('Please, write your managers variant.')->withInput();
            } else {
                if ($parameters['other-managers']) {
                    $parameters['managers'] = $parameters['other-managers'];
                }
            }
        }

        unset($parameters['other-managers']);

        if (in_array('Other', $parameters['deliverables']) and !$request->filled('other-deliverables') ) {
            return back()->withErrors('Please, write your deliverables variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['deliverables'])) {
                $index = array_search('Other', $parameters['deliverables']);
                unset($parameters['deliverables'][$index]);
                $parameters['deliverables'][$index] = "Other: " . $parameters['other-deliverables'];
            }
            unset($parameters['other-deliverables']);
        }

        if (isset($parameters['reports'])) {
            if ( $parameters['reports'] == 'Other' and !$request->filled('other-reports') ) {
                return back()->withErrors('Please, write your reports variant.')->withInput();
            } else {
                if ($parameters['other-reports']) {
                    $parameters['reports'] = $parameters['other-reports'];
                }
                unset($parameters['other-reports']);
            }
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

        unset($parameters['cf-turnstile-response']);

        EstimationMep::create($parameters);

        return redirect()->route('thanksMepServicesForm');
    }

    public function processingMepShort(Request $request)
    {
        $log = EstimationLog::create(['email' => $request->email, 'name' => $request->name]);

        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|string|max:255',
            'disciplines' => 'required|array',
            'services' => 'required|array',
            'lod' => 'required|string',
            'data' => 'required|array',
            'duration' => 'required|string',
            'deliverables' => 'required|array',
            'comment' => 'nullable|string',
            'files' => 'required|array',
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ]);

        $parameters = $request->all();

        if (in_array('Other', $parameters['disciplines']) and !$request->filled('other-discipline') ) {
            return back()->withErrors('Please, write your discipline.')->withInput();
        } else {
            if (in_array('Other', $parameters['disciplines'])) {
                $index = array_search('Other', $parameters['disciplines']);
                unset($parameters['disciplines'][$index]);
                $parameters['disciplines'][$index] = "Other: " . $parameters['other-discipline'];
            }
            unset($parameters['other-discipline']);
        }

        if (in_array('Other', $parameters['services']) and !$request->filled('other-service') ) {
            return back()->withErrors('Please, write your services.')->withInput();
        } else {
            if (in_array('Other', $parameters['services'])) {
                $index = array_search('Other', $parameters['services']);
                unset($parameters['services'][$index]);
                $parameters['services'][$index] = "Other: " . $parameters['other-service'];
            }
            unset($parameters['other-service']);
        }

        if ( $parameters['lod'] == 'Other' and !$request->filled('other-lod') ) {
            return back()->withErrors('Please, write your lod.')->withInput();
        } else {
            if ($parameters['other-lod']) {
                $parameters['lod'] = $parameters['other-lod'];
            }
            unset($parameters['other-lod']);
        }

        if (in_array('Other', $parameters['data']) and !$request->filled('other-data') ) {
            return back()->withErrors('Please, write your incoming data variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['data'])) {
                $index = array_search('Other', $parameters['data']);
                unset($parameters['data'][$index]);
                $parameters['data'][$index] = "Other: " . $parameters['other-data'];
            }
            unset($parameters['other-data']);
        }

        if (isset($parameters['duration'])) {
            if ( $parameters['duration'] == 'Other' and !$request->filled('other-duration') ) {
                return back()->withErrors('Please, write your duration variant.')->withInput();
            } else {
                if ($parameters['other-duration']) {
                    $parameters['duration'] = $parameters['other-duration'];
                }
                unset($parameters['other-duration']);
            }
        }

        if (in_array('Other', $parameters['deliverables']) and !$request->filled('other-deliverables') ) {
            return back()->withErrors('Please, write your deliverables variant.')->withInput();
        } else {
            if (in_array('Other', $parameters['deliverables'])) {
                $index = array_search('Other', $parameters['deliverables']);
                unset($parameters['deliverables'][$index]);
                $parameters['deliverables'][$index] = "Other: " . $parameters['other-deliverables'];
            }
            unset($parameters['other-deliverables']);
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

        unset($parameters['cf-turnstile-response']);

        EstimationMepShort::create($parameters);

        return redirect()->route('thanksMepServicesForm');
    }
}
