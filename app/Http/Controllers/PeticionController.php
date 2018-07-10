<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Peticion;
// use LaraDex\Parcela;
use DB;
use Illuminate\Http\Request;

class PeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $peticiones =DB::table('peticion')
                ->select('peticion.*','usuario.nombre','usuario.apellidos')
                ->join('usuario', 'peticion.id_usuario', '=', 'usuario.id') 
                ->get();

        return view('peticion.index',compact('peticiones'));
        // return $peticiones;

       
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
        Peticion::create($request->all());
        return redirect()->route('peticion.index')->with('success','Registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peticion=Peticion::findOrFail($id);

        return view('peticion.details',compact('peticion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peticion=Peticion::findOrFail($id);

        return view('peticion.edit',compact('peticion'));
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
        Peticion::find($id)->update($request->all());        

        return redirect()->route('peticion.index')->with('success','Registro modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peticion::find($id)->delete();
        
        return redirect()->route('peticion.index')->with('success','Registro eliminado con éxito');
    }
}
