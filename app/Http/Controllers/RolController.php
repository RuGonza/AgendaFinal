<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{
    //
    public function index() {
        return view('admin.Rol.Index');
    }
 
    public function store(Request $request){
           try {
                //code...
                $rol = new Role();
                $rol->name = $request->name;
                $almacenado = $rol->save();
                if($almacenado == true) {
                    notify()->success('Rol Creado Correctamente!');
                    return view("admin.Rol.Index");
                }
           } catch (\Throwable $th) {
                //throw $th;
                notify()->error('Rol no creado');
                return view("admin.Rol.Index");
           }
    }
}
