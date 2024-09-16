<?php

namespace App\Http\Controllers;

use App\Models\imagenes;
use Illuminate\Http\Request;


class imagenesController extends Controller
{
    //
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
            $img = new imagenes();
            if($request->HasFile('image')) {
                $imagen = $request->File('image');
                $nombre =  $imagen->getClientOriginalName();
                $ruta = public_path('img/dash/');
                copy($imagen->getRealPath(),$ruta.$nombre);
                $img->imagenes = $nombre;
            }else {
                notify()->error("No se encontro la imagen con el formato adecuado");  
            }
            $img->save();
            if($img) {
                notify()->success('Imagen Agregada Exitosamente!');
            }else {
                notify()->error("Error no se puede almacenar la imagen");
            }
             return redirect()->route('dashboard');

    }

    /**
     *  Methodo para eliminar la imagen agregada 
     * */
    public function destroy($id) {
        $deleteImg = imagenes::find($id);
        if($deleteImg) {
           
            // Obtener la ruta del archivo desde la base de datos
            $filePath = public_path('img/dash/' . $deleteImg->imagenes);
            // Eliminar el archivo de la carpeta public
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $deleteImg->delete();
            notify()->success('Imagen Eliminado Exitosamente!');
        } else {
            notify()->error("Error no se puede eliminar la imagen");
        }
        return  redirect()->route('dashboard');
    }
}
