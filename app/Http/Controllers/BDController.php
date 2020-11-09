<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::table('cliente')->get();

        return view('bd.index', [
            'clientes' => $clientes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bd.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = DB::table('cliente')->insert(array(
            'nombre' => $request->input('nombre')
        ));

        return redirect()->action('BDController@index')->with('status', 'Cliente guardado correctamente');
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
    public function editar(Request $request){
        $id = $request->input('id');
        $cliente = DB::table('cliente')->where('id', $id)->first();

        return view('bd.crear',[
            'cliente' => $cliente
        ]);
    }

    public function  update(Request $request){

        $id = $request->input('id');
        $cliente = DB::table('cliente')->where('id', $id)->update(array(
            'nombre' => $request->input('nombre')
        ));

        return redirect()->action('BDController@index')->with('status', 'Cliente editado correctamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id){
        $cliente = DB::table('cliente')->where('id', '=', $id)->first();
        return view('bd.detalle',[
            'cliente' => $cliente
        ]);
    }
    public function destroy($id)
    {
        $cliente = DB::table('cliente')->where('id', '=', $id)->delete();

        return redirect()->action('BDController@index')->with('status', 'Cliente eliminado correctamente');
    }
}
