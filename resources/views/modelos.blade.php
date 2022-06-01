@extends('layout.main')

@section('title', 'Modelos')

@section('content')

    <style>
        .secciones {
            width: 1200px;
            height: 400px;
            //background-color:gainsboro;
            display: flex;
            align-items: center;

        }

        .info-container {
            width: 300px;
            height: 350px;
            background-color: ghostwhite;
            display: inline-block;
            position: relative;
            left: 45px;
            margin: 25px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
            cursor: default;
            transition: all 400ms ease;
        }

        .info-sections {
            width: 300px;
            height: 150px;
            display: grid;
            //background-color: aquamarine;
            padding: 25px;
            text-align: center;
            justify-content: center;
            align-items: center;

        }

        .info-container:hover {
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.10);
            transform: translateY(-10%);
        }

        .action {
            background-color: slategrey;
            color: aliceblue;
        }

    </style>
    <h1>Nuestros modelos 2022</h1>

    @foreach ($autos as $marca => $carros)
        <hr>
        <h2 style="text-align: center;"><b>{{ strtoupper($marca) }}</b></h2>
        <hr>
        <div class="secciones" style="align-items: center">
            @foreach ($carros as $modelo => $caracteristicas)
                <div class="info-container">
                    <div>
                        <img width="300px" height="200px" src="{{ asset('/images/'. $caracteristicas[1]) }}">
                    </div>
                    <div class="info-sections">
                        <p>Desde ${{ $caracteristicas[0] }}</p>

                        <button style="font-weight: bold;" class="action">Comprar un {{ $modelo }}</button>
                    </div>
                </div>
                @if ($loop->iteration%3==0 && !$loop->last)
                    </div>
                    <div class="secciones">
                @endif
            @endforeach
        </div>
    @endforeach
@endsection()
