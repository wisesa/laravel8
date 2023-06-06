<?php

namespace App\Http\Controllers;

use App\Models\Krider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class KriderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home', [
            "title" => "home",
            "active" => 'home',
            'kriders' => Krider::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.krider.index', [
            'kriders' => Krider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.krider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:kriders',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('krider-images');
        }

        Krider::create($validatedData);

        return redirect('/dashboard/krider')->with('success', 'New krider has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Krider $krider)
    {
        return view('dashboard.krider.show', [
            'krider' => $krider
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Krider $krider)
    {
        return view('dashboard.krider.edit', [
            'krider' => $krider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Krider $krider)
    {

        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if($request->slug != $krider->slug){
            $rules['slug'] = 'required|unique:krider'; 
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('krider-images');
        }

        Krider::where('id', $krider->id)->update($validatedData);

        return redirect('/dashboard/krider')->with('success', 'Kamen rider has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Krider $krider)
    {
        if($krider->image){
            Storage::delete($krider->image);
        }

        Krider::destroy($krider->id);
        return redirect('/dashboard/krider')->with('success', 'Krider has been deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Krider::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
