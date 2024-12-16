<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeApiController extends Controller
{
    /**
     * funcion para optener todos los mensajes
     */
    public function index(){
        $mensajes=Mensaje::all();
        return response()->json($mensajes);
    }
    //funcion para crear mensaje
    public function store(Request $request){
        $mensaje=Mensaje::create([
            'contenido'=> $request->contenido,
            'fecha_envio'=> $request->fecha_envio,
            'hora_envio'=> $request->hora_envio,
            'id_remitente'=> $request->id_remitente,
            'id_destinatario'=> $request->id_destinatario,
            'estado'=> $request->estado,

        ]);
        return response()->json($mensaje);
    }
    //funcion para actualiar un mensaje
    public function update(Request $request, int $id){
        $mensaje=Mensaje::where('id', $id)->update([
            'contenido'=> $request->contenido,
            'fecha_envio'=> $request->fecha_envio,
            'hora_envio'=> $request->hora_envio,
            'id_remitente'=> $request->id_remitente,
            'id_destinatario'=> $request->id_destinatario,
            'estado'=> $request->estado,

        ]);
        return response()->json($mensaje);
    }
    //funcion para eliminar un mensaje
    public function delete(int $id){
        $mensaje=Mensaje::where('id', $id)->delete();
        return response()->json($mensaje);
    }
}
