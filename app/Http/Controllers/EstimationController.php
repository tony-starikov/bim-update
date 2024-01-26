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

        return view('estimates', compact( 'services', 'menuItems', 'contacts', 'posts', 'og'));
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

        return view('estimatesScanShort', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og'));
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

        return view('estimatesServicesForm', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og'));
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

        if ($parameters['currency'] == 'Other' and !$request->filled('currency-other')) {
            return back()->withErrors('Please, write your project currency variant.')->withInput();
        } else {
            if ($parameters['currency-other']) {
                $parameters['currency'] = $parameters['currency-other'];
            }
            unset($parameters['currency-other']);
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

        return redirect()->route('thanksShortScanToBim');
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

        return view('estimatesMep', compact( 'services', 'menuItems', 'contacts', 'posts', 'og'));
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

        return view('estimatesMepShort', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og'));
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

        return view('estimatesMepServicesForm', compact( 'services', 'menuItems', 'contacts', 'posts', 'page_info', 'og'));
    }

    public function processingMep(EstimationMepRequest $request)
    {
        $parameters = $request->all();

        if ( $parameters['type'] == 'Other' and !$request->filled('type-other') ) {
            return back()->withErrors('Please, write your type of the building\construction.')->withInput();
        } else {
            if ($parameters['type-other']) {
                $parameters['type'] = $parameters['type-other'];
            }
            unset($parameters['type-other']);
        }

        if ( $parameters['language'] == 'Other' and !$request->filled('language-other') ) {
            return back()->withErrors('Please, write your language.')->withInput();
        } else {
            if ($parameters['language-other']) {
                $parameters['language'] = $parameters['language-other'];
            }
            unset($parameters['language-other']);
        }

        if ( $parameters['units'] == 'Other' and !$request->filled('units-other') ) {
            return back()->withErrors('Please, write your units.')->withInput();
        } else {
            if ($parameters['units-other']) {
                $parameters['units'] = $parameters['units-other'];
            }
            unset($parameters['units-other']);
        }

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

        if (in_array('Other', $parameters['services']) and !$request->filled('services-other') ) {
            return back()->withErrors('Please, write your services.')->withInput();
        } else {
            if (in_array('Other', $parameters['services'])) {
                $index = array_search('Other', $parameters['services']);
                unset($parameters['services'][$index]);
                $parameters['services'][$index] = "Other: " . $parameters['services-other'];
            }
            unset($parameters['services-other']);
        }

        if ( $parameters['lod'] == 'Other' and !$request->filled('lod-other') ) {
            return back()->withErrors('Please, write your lod.')->withInput();
        } else {
            if ($parameters['lod-other']) {
                $parameters['lod'] = $parameters['lod-other'];
            }
            unset($parameters['lod-other']);
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

        if ( $parameters['version'] == 'Other' and !$request->filled('version-other') ) {
            return back()->withErrors('Please, write your Revit version variant.')->withInput();
        } else {
            if ($parameters['version-other']) {
                $parameters['version'] = $parameters['version-other'];
            }
            unset($parameters['version-other']);
        }

        if (isset($parameters['coordinationSoftware'])) {
            if (in_array('Other', $parameters['coordinationSoftware']) and !$request->filled('coordinationSoftware-other') ) {
                return back()->withErrors('Please, write your coordination software variant.')->withInput();
            } else {
                if (in_array('Other', $parameters['coordinationSoftware'])) {
                    $index = array_search('Other', $parameters['coordinationSoftware']);
                    unset($parameters['coordinationSoftware'][$index]);
                    $parameters['coordinationSoftware'][$index] = "Other: " . $parameters['coordinationSoftware-other'];
                }
            }
        }

        unset($parameters['coordinationSoftware-other']);

        if (isset($parameters['fabrication_software'])) {
            if ( $parameters['fabrication_software'] == 'Other' and !$request->filled('fabrication_software-other') ) {
                return back()->withErrors('Please, write your fabrication software variant.')->withInput();
            } else {
                if ($parameters['fabrication_software-other']) {
                    $parameters['fabrication_software'] = $parameters['fabrication_software-other'];
                }
            }
        }

        unset($parameters['fabrication_software-other']);

        if (isset($parameters['duration'])) {
            if ( $parameters['duration'] == 'Other' and !$request->filled('duration-other') ) {
                return back()->withErrors('Please, write your duration variant.')->withInput();
            } else {
                if ($parameters['duration-other']) {
                    $parameters['duration'] = $parameters['duration-other'];
                }
            }
        }

        unset($parameters['duration-other']);

        if (isset($parameters['draftsmen'])) {
            if ( $parameters['draftsmen'] == 'Other' and !$request->filled('draftsmen-other') ) {
                return back()->withErrors('Please, write your draftsmens variant.')->withInput();
            } else {
                if ($parameters['draftsmen-other']) {
                    $parameters['draftsmen'] = $parameters['draftsmen-other'];
                }
            }
        }

        unset($parameters['draftsmen-other']);

        if (isset($parameters['modelers'])) {
            if ( $parameters['modelers'] == 'Other' and !$request->filled('modelers-other') ) {
                return back()->withErrors('Please, write your modelers variant.')->withInput();
            } else {
                if ($parameters['modelers-other']) {
                    $parameters['modelers'] = $parameters['modelers-other'];
                }
            }
        }

        unset($parameters['modelers-other']);

        if (isset($parameters['coordinators'])) {
            if ( $parameters['coordinators'] == 'Other' and !$request->filled('coordinators-other') ) {
                return back()->withErrors('Please, write your coordinators variant.')->withInput();
            } else {
                if ($parameters['coordinators-other']) {
                    $parameters['coordinators'] = $parameters['coordinators-other'];
                }
            }
        }

        unset($parameters['coordinators-other']);

        if (isset($parameters['managers'])) {
            if ( $parameters['managers'] == 'Other' and !$request->filled('managers-other') ) {
                return back()->withErrors('Please, write your managers variant.')->withInput();
            } else {
                if ($parameters['managers-other']) {
                    $parameters['managers'] = $parameters['managers-other'];
                }
            }
        }

        unset($parameters['managers-other']);

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

        if (isset($parameters['reports'])) {
            if ( $parameters['reports'] == 'Other' and !$request->filled('reports-other') ) {
                return back()->withErrors('Please, write your reports variant.')->withInput();
            } else {
                if ($parameters['reports-other']) {
                    $parameters['reports'] = $parameters['reports-other'];
                }
                unset($parameters['reports-other']);
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

    public function processingMepShort(EstimationMepShortRequest $request)
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

        if (in_array('Other', $parameters['services']) and !$request->filled('services-other') ) {
            return back()->withErrors('Please, write your services.')->withInput();
        } else {
            if (in_array('Other', $parameters['services'])) {
                $index = array_search('Other', $parameters['services']);
                unset($parameters['services'][$index]);
                $parameters['services'][$index] = "Other: " . $parameters['services-other'];
            }
            unset($parameters['services-other']);
        }

        if ( $parameters['lod'] == 'Other' and !$request->filled('lod-other') ) {
            return back()->withErrors('Please, write your lod.')->withInput();
        } else {
            if ($parameters['lod-other']) {
                $parameters['lod'] = $parameters['lod-other'];
            }
            unset($parameters['lod-other']);
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

        if (isset($parameters['duration'])) {
            if ( $parameters['duration'] == 'Other' and !$request->filled('duration-other') ) {
                return back()->withErrors('Please, write your duration variant.')->withInput();
            } else {
                if ($parameters['duration-other']) {
                    $parameters['duration'] = $parameters['duration-other'];
                }
            }
        }

        unset($parameters['duration-other']);

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

        return redirect()->route('thanksShortMep');
    }
}
