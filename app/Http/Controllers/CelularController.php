<?php

namespace App\Http\Controllers;

use App\Models\celular;
use Illuminate\Http\Request;

class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares=celular::paginate(12);
        return view ("full-width")->with("celulares",$celulares);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("registro");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guardardatoscelular = $request->except("_token");

        celular::insert($guardardatoscelular);

        return redirect ("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function show(celular $celular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $celularupdate=celular::find($id);
        return view("modificar")->with("updatecelular",$celularupdate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $celular = celular::find($id);

        $celularnuevo = $request->except(['_token','_method']);

        $celular->update($celularnuevo);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        celular::destroy($id);

        return redirect ("/");
    }
}
