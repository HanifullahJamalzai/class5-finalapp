<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index')
                ->with('sliders', Property::limit(3)->with('propertyIndoor', 'tags')->orderBy('id','desc')->get())
                ->with('features', Service::limit(6)->with('propertyIndoor', 'tags')->orderBy('id','desc')->get());
    }

    public function property($id, $property)
    {
        dd($id, $property);
    }
}
