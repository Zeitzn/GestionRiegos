<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use LaraDex\Parcela;


class ParcelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $parcelas=Parcela::all();
        
        // $parcelas =DB::table('parcela')
        //         ->join('usuario', 'parcela.id_usuario', '=', 'usuario.id')                
        //         ->select('*')
        //         ->get();
      
        return view('parcela.index',compact('parcelas'));
       
        
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
        $parcela=new Parcela();
        $parcela->parcela=$request->input('parcela');
        $parcela->subparcela=$request->input('subparcela');
        $parcela->superficie_catastral=$request->input('superficie_catastral');
        $parcela->superficie_riego=$request->input('superficie_riego');
        $parcela->riego_precario=$request->input('riego_precario');
        $parcela->municipio=$request->input('municipio');
        $parcela->sector=$request->input('sector');
        $parcela->id_usuario=$request->input('id_usuario');
        $parcela->cultivo=$request->input('cultivo');
        $parcela->sup_ag=$request->input('sup_ag');
        $parcela->superficie=$request->input('superficie');
        $parcela->amortizacion=$request->input('amortizacion');
        $parcela->variedad=$request->input('variedad');
        $parcela->arrendatario=$request->input('arrendatario');
        $parcela->pagador_agua=$request->input('pagador_agua');
        $parcela->pagador_gastos=$request->input('pagador_gastos');
        $parcela->hidrante=$request->input('hidrante');
        $parcela->codigo_catastro=$request->input('codigo_catastro');
        $parcela->tipo_riego=$request->input('tipo_riego');
        $parcela->save();
        
        return redirect()->route('parcela.index')->with('success','Registrado correctamente');

        
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \LaraDex\ParcelaController  $parcelaController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parcela=Parcela::findOrFail($id);

        return view('parcela.details',compact('parcela'));
        // return $parcela;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \LaraDex\ParcelaController  $parcelaController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parcela=Parcela::findOrFail($id);

        return view('parcela.edit',compact('parcela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \LaraDex\ParcelaController  $parcelaController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        Parcela::find($id)->update($request->all());        

        return redirect()->route('parcela.index')->with('success','Registro modificado con éxito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \LaraDex\ParcelaController  $parcelaController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Parcela::find($id)->delete();
        
        return redirect()->route('parcela.index')->with('success','Registro eliminado con éxito');
    }

    
}


