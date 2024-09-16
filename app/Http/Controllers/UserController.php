<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //index del usuario
    public function index() {
            //buscamos todos los usuarios exepto el numero 1
            return view('admin.users.user');
    }

    public function store(Request $request) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required'],
                'tiempo' => ['required','string'],
                'rol' => ['required'],
                'imagen' => ['required']
            ]);
                //code...
                    $user  = new User();
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = Hash::make($request->password);
                    $user->tiempo = $request->tiempo;
                    if($request->hasFile('imagen')) {
                        $imagen = $request->file('imagen');
                        $nombreImg = $imagen->getClientOriginalName();
                        $ruta = public_path('img/perfil/');
                        copy($imagen->getRealPath(),$ruta.$nombreImg);
                        $user->icono = $nombreImg;
                    }
                    $user->save();
                    $user->assignRole($request->rol);
                    if($user) {
                        notify()->success('Barbero Agregado Exitosamente!');
                    }else {
                            //throw $th;
                            notify()->error('Error No se pudo Almacenar el Barbero');
                    }
                    event(new Registered($user));
                    return redirect()->route('Users.index'); 
    }


     /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $userAll = User::Find($id);
        return view('admin.users.edit', compact('userAll'));
    }


    public function destroy($id) {
        $deleteuser = User::find($id);

        if($deleteuser) {
             // Obtener la ruta del archivo desde la base de datos
             $filePath = public_path('img/dash/' . $deleteuser->icono);
             // Eliminar el archivo de la carpeta public
             if (file_exists($filePath)) {
                 unlink($filePath);
             }
             $deleteuser->delete();
            notify()->success('Barbero Eliminado Exitosamente!');
        }else {
            notify()->error('No se pudo Eliminar el barbero');
        }
        return redirect()->route('Users.index'); 
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $usuarios = User::find($id);
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = Hash::make($request->password);
        $usuarios->tiempo = $request->tiempo;
        if($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImg = $imagen->getClientOriginalName();
            $ruta = public_path('img/perfil/');
            copy($imagen->getRealPath(),$ruta.$nombreImg);
            $usuarios->icono = $nombreImg;
        }
        $usuarios->save();
        $usuarios->assignRole($request->rol);
        if($usuarios) {
            notify()->success('Barbero actualizado Exitosamente!');
        }else {
                //throw $th;
                notify()->error('Error No se pudo actualizar el Barbero');
        }
        event(new Registered($usuarios));
        return redirect()->route('Users.index'); 
    }




}

