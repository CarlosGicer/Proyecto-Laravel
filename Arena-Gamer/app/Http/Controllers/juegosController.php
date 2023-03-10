<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Torneo;
use Illuminate\Http\Request;

class juegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.juegos', [ 'juegos' => Juego::paginate(4) ]);
    }

    public function indexAdmin()
    {
        return view('admin.adminJuegos', [ 'juegos' => Juego::paginate(5) ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formNuevoJuego');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $juego = new Juego();
        $juego->nombre = $request->input('nombre');
        $juego->plataforma = $request->input('plataforma');
       
        $path = $request->file('imagen')->store('public');
        // /public/nombreimagengenerado.jpg
        //Cambiamos public por storage en la BBDD para que se pueda ver la imagen en la web
        $juego->imagen =  str_replace('public', 'storage', $path);

        $juego->descripción = $request->input('descripcion');
 

       $juego->save();

       return redirect('juegos/admin/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego, Torneo $torneo) 
    {
        return view('web.juegoDetalle', ['juego' => $juego, 'torneos' => $torneo::all()]);
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
    public function destroy(Juego $juego)
    {
        $juego->delete();
        return redirect('/juegos/admin/admin');
    }
}
