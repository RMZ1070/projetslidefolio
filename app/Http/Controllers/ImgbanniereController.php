<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Imgbanniere;
use Illuminate\Http\Request;

class ImgbanniereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imgbannieres = Imgbanniere::all();

        return view('imgbanniere.viewImageba', compact('imgbannieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('imgbanniere.addbanniere');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgbanniere = new Imgbanniere();
        Storage::disk('public')->delete($imgbanniere->imgba);
        $image=Storage::disk('public')->put('', $request->imgba);

        $imgbanniere->imgba=$image;
        $imgbanniere->titre=$request->input('titre');

        $imgbanniere->save();
        return redirect()->route('imgbanniere.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imgbanniere  $imgbanniere
     * @return \Illuminate\Http\Response
     */
    public function show(imgbanniere $imgbanniere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imgbanniere  $imgbanniere
     * @return \Illuminate\Http\Response
     */
    public function edit(imgbanniere $imgbanniere)
    {
        return view('imgbanniere/editbanniere',compact('imgbanniere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imgbanniere  $imgbanniere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imgbanniere $imgbanniere)
    {
        if ($request->hasFile('imgba')) {
            Storage::disk('public')->delete($imgbanniere->imgba);
            $image=Storage::disk('public')->put('', $request->imgba);
            $imgbanniere->imgba=$image;
        }
        $imgbanniere->titre=$request->input('titre');

        $imgbanniere->save();
     

        return redirect()->route('imgbanniere.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imgbanniere  $imgbanniere
     * @return \Illuminate\Http\Response
     */
    public function destroy(imgbanniere $imgbanniere)
    {
        Storage::disk('public')->delete($imgbanniere->img);
        $imgbanniere->delete();
        return redirect()->route('imgbanniere.index');
    }
}
