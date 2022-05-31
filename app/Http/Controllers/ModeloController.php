<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{

    public function __invoke(Request $request)
    {
        $autos =
            [
                "CHEVROLET" => 'TRACKER',
                "MAZDA" => '323',
                "FORD" => 'RANGER',
                "KIA" => 'SPORTAGE',
                "GREAT WALL" => 'WINGLE'
            ];
        $nombre = "Byron";

        return view('modelos', compact('autos', 'nombre'));
    }
}
