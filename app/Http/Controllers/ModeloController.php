<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function __invoke(Request $request)
    {
        $autos =
            [
                "Chevrolet" => [
                    'Beat' => [14799, 'CHbeat.jpg'],
                    'Blazer RS' => [82999, 'CHblazer.jpg'],
                    'Captiva' => [28999, 'CHcaptiva.jpg'],
                    'Cavalier' => [21999, 'CHcavalier.jpg'],
                    'D-Max' => [27499, 'CHdmax.jpg'],
                    'Equinox' => [37990, 'CHequinox.jpg'],
                    'Grand Vitara' => [25490, 'CHgrandvitara.jpg'],
                    'Onix Sedán' => [19990, 'CHonixsedan.jpg'],
                    'S-Cross' => [23999, 'CHscross.jpg']
                ],
                "Mazda" => [
                    'Sedán' => [21150, 'MZsedan.png'],
                    'CX-50' => [26800, 'MZcx50.png'],
                    'MX-5 Miata' => [27650, 'MZmx5.png'],
                    'Hatchback' => [23100, 'MZhatchback.png'],
                    'CX-30' => [22500, 'MZcx30.png'],
                    'CX-5' => [26250, 'MZcx5.png'],
                    'CX-9' => [35630, 'MZcx9.png']
                ],
                "Ford" => [
                    'Ecosport' => [24990, 'FDecosport.jpg'],
                    'Edge' => [56990, 'FDedge.jpg'],
                    'Escape' => [38990, 'FDescape.jpg'],
                    'Expedition' => [93990, 'FDexpedition.jpg'],
                    'Explorer' => [71990, 'FDexplorer.jpg'],
                    'F150' => [48490, 'FDf150.jpg'],
                    'Ranger' => [38490, 'FDranger.jpg'],
                    'Raptor' => [109990, 'FDraptor.jpg']
                ],
                "Kia" => [
                    'Picanto' => [12799, 'KIApicanto.jpg'],
                    'Soluto' => [17490, 'KIAsoluto.jpg'],
                    'Rio 5' => [18999, 'KIArio5.jpg'],
                    'Stinger' => [18999, 'KIAstinger.jpg'],
                    'Niro' => [28999, 'KIAniro.jpg'],
                    'Sportage' => [29990, 'KIAsportage.jpg'],
                    'Sorento' => [36990, 'KIAsorento.jpg']
                ]
            ];
        return view('modelos', compact('autos'));
    }
}
