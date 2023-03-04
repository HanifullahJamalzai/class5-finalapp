<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index')
                ->with('sliders', Property::limit(4)->orderBy('id','desc')->get());
    }

    public function property($id, $property)
    {
        dd($id, $property);
        return view('landing.index')
                ->with('sliders', Property::limit(4)->orderBy('id','desc')->get());
    }
}
