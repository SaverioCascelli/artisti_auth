<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::orderBy('id', 'desc')->paginate(8);
        $direction = 'desc';
        return view('museums.index', compact('museums', 'direction'));
    }

    /* public function orderby($column, $direction)
    {
        $direction = $direction === 'desc' ? 'asc' : 'desc';
        $museums = Museum::orderBy($column, $direction)->paginate(8);

        return view('museums.index', compact('direction', 'museums'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('museums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $museum_data = $request->all();

        $new_museum = new Museum();
        $str = new Str();

        $museum_data['slug'] = generateSlug($museum_data['name'], $new_museum, $str);
        $museum_data['address'] = "prova";
        $new_museum->fill($museum_data);
        $new_museum->save();


        return redirect()->route('admin.museums.show', $new_museum)->with('message', "Museo inserito correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        return view('museums.show', compact('museum'));
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
