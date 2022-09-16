<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ComicController extends Controller
{

    protected $validationRules = [
                'title' => 'required|min:3|max:255',
                'description' => 'required|min:3',
                'thumb' => 'required|url',
                'price' => 'required|numeric|between:2,20',
                'series' => 'required|min:3|max:255',
                'sale_date' => 'required|date|after:1900/01/01',
                'type' => 'required|min:3|max:255'     
    ];
    
    protected $customValidationMessages = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validatedData = $request->validate($this->validationRules);

        $newComic = new Comic;
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->slug = Str::slug($newComic->title, '-');
        $newComic->save();

        return redirect()->route('comics.index', $newComic->slug)->with('result-message', '"'.$newComic['title'].'"' . 'Comic created')->with('result-class-message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comic = Comic::where('slug', $slug)->firstOrFail();
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $comic = Comic::where('slug', $slug)->firstOrFail();
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $data = $request->all();

        $validatedData = $request->validate($this->validationRules);

        $newComic = Comic::where('slug', $slug)->firstOrFail();
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->slug = Str::slug($newComic->title, '-');

        // $newComic->save();
        $newComic["slug"] = Str::slug($newComic->title, '-');
        $newComic->update($data);

        return redirect()->route('comics.show', $newComic->slug)->with('result-message', '"'.$newComic->title.'"' . 'Comic edited')->with('result-class-message', 'success');

        
    }

    /**
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $newComic = Comic::where('slug', $slug)->firstOrFail();
        $newComic->delete();

        return redirect()->route('comics.index')->with('result-message', '"'.$newComic->title.'"' . 'Comic removed')->with('result-class-message', 'danger');
    }
}
