<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\registroRequest;
use App\Usuario;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

        $data = request()->all();

        Usuario::create([

                'us_rut' => $data['us_rut'],
                'us_nombre' => $data['us_nombre'],
                'us_apellido' => $data['us_apellido'],
                'us_email' => $data['us_email'],
                'us_pass' => bcrypt($data['us_pass'])

        ]);

       // $Usuario->save();
        
        return redirect()->route('home');
        //->with('status', 'Usuario registrado');
      //array(
            //'us_rut'=> $request->get('rut'),
            //'us_email'=> $request->get('email'),
            //'us_nombre'=>$request->get('nombre'),
            //'us_apellido'=>$request->get('apellido'),
            //'us_pass'=>$request->get('password'),
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
