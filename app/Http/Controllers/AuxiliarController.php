<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
// use Excel;
use LaraDex\Usuario;
use LaraDex\Parcela;
class AuxiliarController extends Controller
{
    public function cargarUsuarios()
    {
        $usuarios=Usuario::all();
        return $usuarios;
    }
    public function cargarParcelas()
    {
        $parcelas=Parcela::all();
        return $parcelas;
    }
    public function cargarParcelasUsuario($id)
    {
        // $parcelas=Parcela::where("id_usuario","=",$id);

        $parcelas = DB::table('parcela')->select('*')->where('id_usuario','=',$id)->get();
        return response()->json($parcelas);
      
        
        // return 'id '.$id;
    }

    public function importUsers(Request $request)
    {
        \Excel::load($request->excel, function($reader) {
    
            $excel = $reader->get();
    
            // iteracción
            $reader->each(function($row) {
    
                $usuario = new Usuario;
                $usuario->id_contable = $row->id_contable;
                $usuario->nombre = $row->nombre;
                $usuario->apellidos = $row->apellidos;
                $usuario->dni = $row->dni;
                $usuario->telefono = $row->telefono;
                $usuario->direccion = $row->direccion;
                $usuario->poblacion = $row->poblacion;
                $usuario->provincia = $row->provincia;
                $usuario->cp = $row->cp;                
                $usuario->save();
    
            });
        
        });
    
        return view("usuario.index");
    }
}
