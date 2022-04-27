<?php

use App\Models\eventos;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventosController extends Controller
{
 
    public function index(Request $request){
        return Eventos::all();
    }

    public function store(Request $request){
        return $request;
        return Eventos::create([
            'nome_eventos' => $request->nome_eventos,
            'Data' => $request->data,
            'Hora' => $request->hora,
            'messagem' => $request->messagem
           
        ]);
    }

    public function show(Request $request, Eventos $eventos){
        return $eventos;
    } 
    public function delete(Eventos $eventos){
        $eventos->delete();
    }
}
