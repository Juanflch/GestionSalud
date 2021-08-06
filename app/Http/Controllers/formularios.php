<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularios extends Controller
{
    //FORMULARIO REGISTRO USUARIOS

    //cargamos la vista views/formulario/form.blade.php
 public function action_index()
 {
 
 return View::make('registro');
 
 }
 
 //validando formularios en laravel
 public function action_user()
 {
 
 //obtenemos los campos del formulario con Input::get('nombrecampo') 
 //y con e los limpiamos para guadarlos en la base de datos
 
	$email = e(Input::get('email'));
 	$nombre = e(Input::get('nombre'));
 	$apellido = e(Input::get('apellido'));
     $password = e(Input::get('password'));
     
 
     //creamos un array con las reglas que deben cumplir nuestro formulario
     $rules = array(

     	 'email' => 'required|email|min:6|max:100|unique:usuarios',
         'nombre' => 'required|min:2|max:100',
         'apellido' => 'required|min:2|max:100',
         'password' => 'required|min:6|max:100'
     );
 
     //personalizamos los mensajes de error para nuestro formualario
     $messages = array(
     'required' => 'El campo :attribute es obligatorio.',
     'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
     'email' => 'El campo :attribute debe ser un email válido.',
     'max' => 'El campo :attribute no puede tener más de :min carácteres.',
     'unique' => 'El email ingresado ya existe en la base de datos'
 );
 
     //validation necesita los campos, las reglas y opcionalmente los mensajes,
     //si no le pasamos los mensajes los pondrá en inglés, que son los que vienen
     //por defecto con laravel

 	$validation = Validator::make(Input::all(), $rules, $messages);
 
 //si la validación falla redirigimos a formularios con los errores
 //y los campos que haya ingresado el usuario para que queden grabados
     if ($validation->fails())
     {
 
         return Redirect::to('formularios')->with_errors($validation)->with_input();
 
     //en otro caso llamamos al método insert_users de la clase usuarios para
     //ingresar al usuario en la tabla usuarios
     }else{
 
     	//hacemos uso del método estático que hemos creado llamado insert users
     	//del modelo usuarios, así de fácil
     	
     	$insert = Usuarios::insert_users($email,$nombre,$apellido,$password);
 
     	//si se realiza correctamente la inserción envíamos un mensaje de tipo flash
     	//que sólo estará disponible una vez
     	if($insert)
     	{
 
      return Redirect::to('formularios')->with('mensaje','¡Usuario registrado correctamente!.');
 
     	}
 
     }
 
 }
}
