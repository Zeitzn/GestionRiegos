<?php

namespace LaraDex\Http\Controllers;
use Illuminate\Support\Facades\DB;
use LaraDex\Comunidad;
use Illuminate\Http\Request;

class ComunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunidades=Comunidad::all();
        return view('comunidad.index',compact('comunidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comunidad=new Comunidad();
        $comunidad->nombre=$request->input('nombre');
        $comunidad->dni=$request->input('dni');
        $comunidad->domicilio=$request->input('domicilio');
        $comunidad->telefono=$request->input('telefono');
        $comunidad->localidad=$request->input('localidad');
        $comunidad->provincia=$request->input('provincia');
        $comunidad->zona=$request->input('zona');
        $comunidad->regadio=$request->input('regadio');
        $comunidad->save();
        // return $this->index();

        // Post::create($request->all);
        return redirect()->route('comunidad.index')->with('success','Registrado correctamente');

        
        

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

        $comunidad=Comunidad::findOrFail($id);

        return view('comunidad.edit',compact('comunidad'));

        // return $comunidad;
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
        Comunidad::find($id)->update($request->all());        

        return redirect()->route('comunidad.index')->with('success','Registro modificado con éxito');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comunidad::find($id)->delete();
        
        return redirect()->route('comunidad.index')->with('success','Registro eliminado con éxito');
 
    }
}
