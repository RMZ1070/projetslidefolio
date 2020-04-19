<?php

namespace App\Http\Controllers;

use App\Diaporama;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DiaporamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diaporamas = Diaporama::all();

        return view('diaporama.viewdiaporama', compact('diaporamas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diaporama.adddiaporama');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diaporama = new Diaporama();
        Storage::disk('public')->delete($diaporama->image);
        $image=Storage::disk('public')->put('', $request->image);

        $diaporama->image=$image;

        $diaporama->save();
        return redirect()->route('diaporama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diaporama  $diaporama
     * @return \Illuminate\Http\Response
     */
    public function show(Diaporama $diaporama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diaporama  $diaporama
     * @return \Illuminate\Http\Response
     */
    public function edit(Diaporama $diaporama)
    {
        return view('diaporama/editdiaporama',compact('diaporama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diaporama  $diaporama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diaporama $diaporama)
    {
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($diaporama->image);
            $image=Storage::disk('public')->put('', $request->image);
            $diaporama->image=$image;
        }

        $diaporama->save();
     

        return redirect()->route('diaporama.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diaporama  $diaporama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diaporama $diaporama)
    {
        Storage::disk('public')->delete($diaporama->img);
        $diaporama->delete();
        return redirect()->route('diaporama.index');
    }
}
