<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\Propietario;
use App\Conductore;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $vehiculos = Vehiculo::paginate();

        $informes = DB::table('vehiculos')
        ->join('propietarios','propietarios.id','=','vehiculos.id_propietario')
        ->join('conductores','conductores.id','=','vehiculos.id_conductor')
        ->select('propietarios.primer_nombre','propietarios.segundo_nombre','propietarios.apellidos',
        'conductores.primer_nombre as primer_nombre_c', 'conductores.segundo_nombre as segundo_nombre_c',
        'conductores.apellidos as apellidos_c','vehiculos.placa','vehiculos.marca')
        ->get();

        return view('home', compact('informes')) ;
        // ->with('i', (request()->input('page', 1) - 1) * $informes->perPage());

    }
}
