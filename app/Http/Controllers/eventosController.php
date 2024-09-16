<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eventos;
use App\Models\User;

class eventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("admin.Eventos");
    }
    //obtener los eventos 
    public function calendarEvents(Request $request) {
        
        $userLog= auth()->id();
        if ($userLog == 1 ){
            $events = eventos::all();
        }else {
            $events = eventos::all()->where('user_id', $userLog);
        }    
        $formatEvents = [];
        foreach($events as $agenda) {   
        $formatEvents[] = [
         "id" =>  $agenda->id,
         'title' => $agenda->nombre .' ' .$agenda->Telefono,
         'start' => $agenda->fecha.' '. $agenda->hora_inicio,
         'end' => $agenda->fecha.' '. $agenda->hora_final,
     ];
    }
        return response()->json($formatEvents);

    }

    //funcion para almacenar d los eventos de la parte administrativa
    public function createAgendaBack(Request $request) {
         $datos = User::find($request->usuarios);
         $agenda = new eventos();
         if($request->timpo < $request->tiempoFinal) {
            notify()->error('Seleccione hora superior a la actual');
            return redirect()->route('Agenda.index');
         }
         $agenda->nombre = $datos->name;
         $agenda->fecha = $request->fecha;
         $agenda->hora_inicio = $request->tiempo;
         $agenda->hora_final = $request->tiempoFinal;
         $agenda->user_id = $request->usuarios;
         $agenda->save();

         notify()->success('Hora Apartada');
         return redirect()->route('Agenda.index');
    }

        //funcion para obtener los usarios con sus horas 
    public function obtenerEvento($id) {

        $horasOcupadas = eventos::where('user_id', $id)->select('hora_inicio','hora_final','fecha')->get();
        $user = User::find($id);
        return response()->json([
            'horas_ocupadas' => $horasOcupadas,
            'user' => $user,
        ]);
    }
}
