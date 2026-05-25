<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use App\Models\Quarter;
use App\Models\Service;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{


// RUTAS QUE TENIA EN EL QUIZ ESTAN BIEN SOLO QUE YO LAS PUSE CON ID y NO DEJARLOS FIJOS CON find(1)

    // public function soldado($id)
    // {
    //     $soldado = Soldier::find($id);
        
    //     return response()->json([
    //         'nombre' => $soldado->nombre,
    //         'apellido' => $soldado->apellido,
    //         'grado' => $soldado->grado
    //     ]);
    // }

    // public function soldados()
    // {
    //     $soldados = Soldier::all();
    //     return response()->json($soldados);
    // }

    // public function cuartel($id)
    // {
    //     $cuartel = Quarter::find($id);
        
    //     return response()->json([
    //         'nombre' => $cuartel->nombre,
    //         'ubicacion' => $cuartel->ubicacion
    //     ]);
    // }


    // public function cuarteles()
    // {
    //     $cuarteles = Quarter::all();
    //     return response()->json($Quarter);

    // }
    
    // public function servicio($id)
    // {
    //     $servicio = Service::find($id);
        
    //     return response()->json([
    //         'actividad' => $servicio->actividad_servicio
    //     ]);
    // }




//    RUTAS ACTUALIZADAS CON EL  find(1)


    public function soldado()
    {
        $soldado = Soldier::find(1);

        return [
            'soldado' => $soldado,
            'cuerpo' => $soldado->armyCorp,
            'cuartel' => $soldado->quarter,
            'compañia' => $soldado->company,
            'servicios' => $soldado->services,
        ];
    }

    
    public function cuartel()
    {
        $cuartel = Quarter::find(1);

        return [
            'cuartel' => $cuartel,
            'soldados' => $cuartel->soldiers,
        ];
    }


    public function servicio()
    {
        $servicio = Service::find(1);

        return [
            'servicio' => $servicio,
            'soldados' => $servicio->soldiers,
        ];
    }

    public function armyCorp()
    {
        $armyCorp = ArmyCorp::find(1);

        return [
            'cuerpo' => $armyCorp,
            'soldados' => $armyCorp->soldiers,
        ];
    }

    public function company()
    {
        $company = Company::find(1);

        return [
            'compañia' => $company,
            'soldados' => $company->soldiers,
        ];
    }


}



    