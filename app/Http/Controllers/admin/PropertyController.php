<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyStoreRequest;
use App\Http\Requests\UpdatePropertyRequest;
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
        return view('admin.property.index')->with('properties', Property::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.property.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function store(PropertyStoreRequest $request)
     {
         $property['user_id'] = auth()->user()->id;
         $property['title'] = $request->title;
         $property['beswa'] = $request->beswa;
         $property['address'] = $request->address;
         $property['price'] = $request->price;
         $property['description'] = $request->description;
         $property['type'] = $request->type;
         $property['category'] = $request->category;
         if($request->photo){
             @unlink(public_path().'/'.'storage/photos/properties/');
             $fileName = 'property_'.date('Ymd_hmis').'_'.rand(10, 10000).'.'.$request->photo->extension();
             $request->photo->storeAs('photos/properties/', $fileName, 'public');
             $property['photo'] = '/storage/photos/properties/'.$fileName;
         }
         $fileName = 'property_'.date('Ymd_hmis').'_'.rand(10, 10000).'.'.$request->photo->extension();
        $request->photo->storeAs('photos/properties/', $fileName, 'public');
        $property['photo'] = '/storage/photos/properties/'.$fileName;
        $property = Property::create($property);

        PropertyIndoor::create([
            'property_id' => $property->id,
            'rooms' => $request->rooms,
            'kitchen' => $request->kitchen,
            'bathroom' => $request->bathroom,
        ]);

        if($request->tag){
            $property->tags()->attach($request->tag);
        }

        
         session()->flash('success', 'You have successfully Updated Property');
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
    public function edit(Property $property)
    {
        $tags = Tag::all();
        $selected_tags = [];
        foreach($property->tags as $tag){
            array_push($selected_tags, $tag->pivot->tag_id);
        }
        return view('admin.property.edit', compact('property', 'selected_tags', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property->title = $request->title;
        $property->beswa = $request->beswa;
        $property->address = $request->address;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->type = $request->type;
        $property->category = $request->category;

        if($request->hasFile('photo')){
            @unlink(public_path().'/'.$property->photo);
            $fileName = 'property_'.date('Ymd_hmis').'_'.rand(10, 10000).'.'.$request->photo->extension();
            $request->photo->storeAs('photos/properties/', $fileName, 'public');
            $property->photo = '/storage/photos/properties/'.$fileName;
        }
        $property->save();

        $property->propertyIndoor()->update([
            'rooms' => $request->rooms,
            'kitchen' => $request->kitchen,
            'bathroom' => $request->bathroom,
        ]);

        if($request->tag){
            $property->tags()->detach();
            $property->tags()->attach($request->tag);
        }
        
        session()->flash('success', 'You have successfully Update Property');
        return redirect('/admin/property');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->propertyIndoor()->delete();
        $property->tags()->detach();
        @unlink(public_path().'/'.$property->photo);
        $property->delete();
        session()->flash('success', 'You have successfully deleted Property');
        return redirect('/admin/property');
    }
}
