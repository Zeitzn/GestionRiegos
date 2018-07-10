<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Agua;
use Illuminate\Http\Request;

class AguaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aguas=Agua::all();
        return view('agua.index',compact('aguas'));
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
        $agua=new Agua();
        $agua->tipo=$request->input('tipo');
        $agua->coste_agricola=$request->input('coste_agricola');
        $agua->coste_ganadero=$request->input('coste_ganadero');
        $agua->coste_urbano=$request->input('coste_urbano');
        $agua->coste_industrial=$request->input('coste_industrial');
        
        $agua->save();
        // return $this->index();

        // Post::create($request->all);
        return redirect()->route('agua.index')->with('success','Registrado correctamente');

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
        $agua=Agua::findOrFail($id);

        return view('agua.edit',compact('agua'));
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
        Agua::find($id)->update($request->all());        

        return redirect()->route('agua.index')->with('success','Registro modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agua::find($id)->delete();
        
        return redirect()->route('agua.index')->with('success','Registro eliminado con éxito');
    }
}
