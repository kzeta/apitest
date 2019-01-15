<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ApiController extends Controller
{
    //
    public function index()
    {
        return Articulo::all();
    }
 
    public function mostrar(Articulo $articulo)
    {
        return $articulo;
    }

    public function crear(Request $request)
    {
        $articulo = Articulo::create($request->all());
		return response()->json($articulo, 201); 
    }

    public function actualizar(Request $request, Articulo $articulo)
    {
        $articulo->update($request->all());
        return response()->json($articulo, 200);
    }

    public function eliminar(Articulo $articulo)
    {
        $articulo->delete();
        
        return response()->json(null, 204);
    }

}
