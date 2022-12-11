<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorfruta;
use DB;
use Carbon\Carbon;
class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $consultafrutas= DB::table('tb_frutas')->get();
         
        return view('consultafrutas',compact('consultafrutas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(validadorfruta  $request)
    {
        DB::table('tb_frutas')->insert([
            "nombre"=> $request->input('txtfruta'),
            "temporada"=> $request->input('txttemp'),
            "precio"=> $request->input('txtprecio'),
            "st"=> $request->input('txtst'),
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()


        ]);
        return redirect('vistaconsulta')->with('confirmacion','abc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('consultafrutas');
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
    public function update(validadorfruta $request, $id)
    {
        DB::table('tb_frutas')->where('idFruta',$id)->update([
            "nombre"=> $request->input('txtfruta'),
            "temporada"=> $request->input('txttemp'),
            "precio"=> $request->input('txtprecio'),
            "st"=> $request->input('txtst'),
            
            "updated_at"=> Carbon::now()


        ]);

        return redirect('vistaconsulta')->with('Actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_frutas')->where('idFruta',$id)->delete();

        return redirect('vistaconsulta')->with('Eliminar','abc');
    }
}
