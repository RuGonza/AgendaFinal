<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajustes;

class AjustesController extends Controller
{
    //
    public function index() {
        return view("admin.Ajustes.Index");
    }
    public function store(Request $request)   {

            $ajustes = Ajustes::all()->count();
            if($ajustes > 0) {
                $ajustes->delete();
                $ajustes->mensaje = $request->mensaje;
                if($request->hasFile('logotipo')) {
                        $img = $request->file('logotipo');
                        $nombreImg = $img->getClientOriginalName();
                        $ruta = public_path('img/logotipo/');
                        copy($img->getRealPath(), $ruta.$nombreImg);
                        $ajustes->logotipo = $nombreImg;
                }
                if($request->hasFile('icon')) {
                    $img =  $request->file('icon');
                    $nombreImg = $img->getClientOriginalName();
                    $ruta = public_path('img/icon/');
                    copy($img->getRealPath(), $ruta.$nombreImg);
                    $ajustes->icon = $nombreImg;
                }
                $ajustes->plantilla = $request->plantilla;
                $ajustes->save();
                notify()->success('Ajustes Actualizados');  
                return redirect()->route('Ajustes.index');
                
            }
    }

}
