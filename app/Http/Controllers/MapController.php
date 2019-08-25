<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//API PAR AUTILIZAR EL MAPA
use GMaps;
//MODELO PARA OBTENER LOS DATOS DE LA BD
use App\Gmaps_geocache;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //CONFIGURACION PARA LOS ATRIBUTOS DEL MAPA
        $config = array();
        //UBICACION POR DEFECTO
        $config['center'] = '19.0470044, -98.2149832';
        $config['zoom'] = '12';
        $config['map_height'] = '500px';
        //$config['map_width'] = '500px';
        $config['scrollwheel'] = false;
        $config['geocodeCaching'] = true;

        //INICIALIZACION DEL MAPA
        GMaps::initialize($config);
        
        //OBTIENE TODOS LOS REGISTROS DE LA BASE DE DATOS DE LA TABLA gmaps_geocache
        $result = Gmaps_geocache::all();
        //CANTIDAD TOTAL DE REGISTROS
        $total = count( $result );

        for ($i = 0; $i < $total ; $i++) {
            //ASIGNA LOS VALORES DE LAS UBICACIONES
            $marker['position'] = $result[$i]->latitude.",".$result[$i]->longitude;
            $marker['infowindow_content']= $result[$i]->address;
            GMaps::add_marker($marker);
        }
        
        //CREACION DEL MAPA
        $map = GMaps::create_map();
        //MUESTRA LA VISTA, Y MANDA ATRIBUTOS PARA EL CORRECTO FUNCIONAMIENTO
        return view('map')->with('map', $map);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
