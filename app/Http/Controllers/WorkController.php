<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();

        return view('work.viewwork', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work.addwork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Work();
        //disk permet d'aller placer dans le dossier public l'image et le put qui permet de mettre l'image dans le 2éme paramétre.
        $image=Storage::disk('public')->put('', $request->image);
        $work->image=$image;
        $work->categorie=$request->input('categorie');
 
        $work->save();
        return redirect()->route('work.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('work/editwork',compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($work->image);
            $image=Storage::disk('public')->put('', $request->image);
            $work->image=$image;
        }
     


        
        $work->save();
     

        return redirect()->route('work.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('work.index');
    }
}
