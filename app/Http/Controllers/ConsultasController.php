<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use App\Models\Quarter;
use App\Models\Service;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function soldado($id)
    {
        $soldado = Soldier::find($id);
        
        return response()->json([
            'nombre' => $soldado->nombre,
            'apellido' => $soldado->apellido,
            'grado' => $soldado->grado
        ]);
    }

    public function soldados()
    {
        $soldados = Soldier::all();
        return response()->json($soldados);
    }

    public function cuartel($id)
    {
        $cuartel = Quarter::find($id);
        
        return response()->json([
            'nombre' => $cuartel->nombre,
            'ubicacion' => $cuartel->ubicacion
        ]);
    }


    public function cuarteles()
    {
        $cuarteles = Quarter::all();
        return response()->json($Quarter);

    }


    public function servicio($id)
    {
        $servicio = Service::find($id);
        
        return response()->json([
            'actividad' => $servicio->actividad_servicio
        ]);
    }
}



    