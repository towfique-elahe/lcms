<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::published()->latest()->get();
        return view('frontend.services', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->published()->firstOrFail();
        return view('frontend.service', compact('service'));
    }
}