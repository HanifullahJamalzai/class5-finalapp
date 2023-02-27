<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyStoreRequest;
use App\Models\Property;
use App\Models\PropertyIndoor;
use App\Models\Tag;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.property.form', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyStoreRequest $request)
    {
        // $property = new  Property();
        $property['user_id'] = auth()->user()->id;
        $property['title'] = $request->title;
        $property['beswa'] = $request->beswa;
        $property['address'] = $request->address;
        $property['price'] = $request->price;
        $property['description'] = $request->description;
        $property['type'] = $request->type;
        $property['category'] = $request->category;

        // if($request->photo){
            // dd($request->photo);
            $fileName = 'property_'.date('Ymd_hmis').'_'.rand(10, 10000).'.'.$request->photo->extension();
            $request->photo->storeAs('photos/properties/', $fileName, 'public');
            $property['photo'] = '/storage/photos/properties/'.$fileName;
        // }
        $property = Property::create($property);
        // $property->save();

        // dd($property->id);

        PropertyIndoor::create([
            'property_id' => $property->id,
            'rooms' => $request->rooms,
            'kitchen' => $request->kitchen,
            'bathroom' => $request->bathroom,
        ]);
        // dd($request->tag);

        $property->tags()->attach($request->tag);

        return redirect('/admin/property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
