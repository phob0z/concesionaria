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
           /*  $autos =
            [
                'marcas' => [
                    'Chevrolet' => [
                        'Beat' => ['precio' => 14799, 'img' => 'CHbeat.jpg'],
                        'Blazer RS' => ['precio' => 82999, 'img' => 'CHblazer.jpg'],
                        'Captiva' => ['precio' => 28999, 'img' => 'CHcaptiva.jpg'],
                        'Cavalier' => ['precio' => 21999, 'img' => 'CHcavalier.jpg'],
                        'D-Max' => ['precio' => 27499, 'img' => 'CHdmax.jpg'],
                        'Equinox' => ['precio' => 37990, 'img' => 'CHequinox.jpg'],
                        'Grand Vitara' => ['precio' => 25490, 'img' => 'CHgrandvitara.jpg'],
                        'Onix Sedán' => ['precio' => 19990, 'img' => 'CHonixsedan.jpg'],
                        'S-Cross' => ['precio' => 23999, 'img' => 'CHscross.jpg']
                    ],
                    'Mazda' => [
                        'Sedán' => ['precio' => 21150, 'img' => 'MZsedan.png'],
                        'CX-50' => ['precio' => 26800, 'img' => 'MZcx50.png'],
                        'MX-5 Miata' => ['precio' => 27650, 'img' => 'MZmx5.png'],
                        'Hatchback' => ['precio' => 23100, 'img' => 'MZhatchback.png'],
                        'CX-30' => ['precio' => 22500, 'img' => 'MZcx30.png'],
                        'CX-5' => ['precio' => 26250, 'img' => 'MZcx5.png'],
                        'CX-9' => ['precio' => 35630, 'img' => 'MZcx9.png']
                    ],
                    'Ford' => [
                        'Ecosport' => ['precio' => 24990, 'img' => 'FDecosport.jpg'],
                        'Edge' => ['precio' => 56990, 'img' => 'FDedge.jpg'],
                        'Escape' => ['precio' => 38990, 'img' => 'FDescape.jpg'],
                        'Expedition' => ['precio' => 93990, 'img' => 'FDexpedition.jpg'],
                        'Explorer' => ['precio' => 71990, 'img' => 'FDexplorer.jpg'],
                        'F150' => ['precio' => 48490, 'img' => 'FDf150.jpg'],
                        'Ranger' => ['precio' => 38490, 'img' => 'FDranger.jpg'],
                        'Raptor' => ['precio' => 109990, 'img' => 'FDraptor.jpg']
                    ],
                    'Kia' => [
                        'Picanto' => ['precio' => 12799, 'img' => 'KIApicanto.jpg'],
                        'Soluto' => ['precio' => 17490, 'img' => 'KIAsoluto.jpg'],
                        'Rio 5' => ['precio' => 18999, 'img' => 'KIArio5.jpg'],
                        'Stinger' => ['precio' => 18999, 'img' => 'KIAstinger.jpg'],
                        'Niro' => ['precio' => 28999, 'img' => 'KIAniro.jpg'],
                        'Sportage' => ['precio' => 29990, 'img' => 'KIAsportage.jpg'],
                        'Sorento' => ['precio' => 36990, 'img' => 'KIAsorento.jpg']
                    ]
                ]
            ]; */
        return view('modelos', compact('autos'));
    }
}
