<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $testimonials = Testimonial::all();
        $testimonials = Testimonial::paginate(4);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Testimonial::create( 
            $request->validate([
                'name' => 'required|min:4|max:255',
                'position' => 'required|min:4|max:255',
                'description' => 'required|min:4|max:500',
            ])
        );
        session()->flash('success', 'You have successfully Testimonial');
        return back();

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
    public function edit(Testimonial $testimonial)
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonial', 'testimonials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        // dd($testimonial, $request->all());
        $testimonial->update( 
            $request->validate([
                'name' => 'required|min:4|max:255',
                'position' => 'required|min:4|max:255',
                'description' => 'required|min:4|max:500',
            ])
        );
        session()->flash('success', "Updated Successfully!");
        return redirect('/admin/testimonial');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        // $testi = Testimonial::find($id);
        $testimonial->delete();
        session()->flash('success', "Deleted Successfully!");
        return back();
    }

    public function search(Request $request)
    {
        // dd(Testimonial::where('name', 'like', '%'.'a'.'%')->get());
        // dd($request->query);

        // $result = Testimonial::
        //             where('name', 'LIKE', '%'.$request->query.'%')
        //             ->get();
        
        // $result = DB::table('testimonials')->where('name', 'like', "%".$request->query."%")->get();
        dd($result);
    }
}
