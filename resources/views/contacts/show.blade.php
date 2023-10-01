@extends('home')

@section('css')
    <style>
        #tabla {
            width: 700px;
            padding: 20px;
            border: 1px solid gray;
        }

        #encabezado {
            font-family: 'Bahnschrift';
            text-align: center;
        }

        #title {
            font-family: 'Bahnschrift';
            text-align: center;
        }

        #tit {
            font-family: 'Bahnschrift';
            text-align: center;
        }

        h5 {
            font-family: 'Bahnschrift';
            text-align: center;
        }

        #encabezado2 {

            font-family: 'Bahnschrift';
            color: '';
            text-align: center;

        }

        #name {
            font-family: 'Bahnschrift';
        }

        #medidor {
            font-family: 'Bahnschrift';
        }

        #consumo {
            font-family: 'Bahnschrift';
        }

        #dir {
            font-family: 'Bahnschrift';
        }

        #form {
            font-family: 'Consolas';
            border: 1px solid white;
        }
    </style>
@endsection

@section('content')
    <div id="tabla">
        <div id="titulo">
            <img src="{{ Vite::asset('resources/images/Puerto.jpg') }}" width="60" height="60" />
            <a>
                CAPS PLAN NICARAGUA
            </a>
            <img src="{{ Vite::asset('resources/images/CAPS.jpg') }}" alt="img" width="60" height="60" />
        </div>

        <p id="tit"> LA UNION "ENMANUEL"</p>
        <p id="encabezado">Comite de agua potable "PLAN NICARAGUA"</P>
        <p id="title">Barrio Plan Nicaragua La Union-RUC:J0810000400833</P>

        <h5>FACTURA Y ESTADO DE CUENTA</h5>
        No {{ $invoiceNumber ?? $contact->id }}

        <p id="name">Nombre: {{ $contact->name }} </p>
        <p>Cedula: {{ $contact->identification }}</p>

        <p id="medidor">N medidor: {{ $contact->measurer }}</p>

        <p>Lectura anterior: {{ $contact->previous_reading }}</p>

        <p>Lectura actual: {{ $contact->current_reading }}</p>

        <p id="consumo">Consumo mensual: {{ $contact->monthly_consumption }}</p>

        <p>Monto a pagar: {{ $contact->amount_payable }}</p>

        <p>Mora: {{ $contact->arrears }}</p>

        <p id="dir"> Direccion:{{ $contact->location }}</p>

        <p>Observaciones</p>

        <br />
        <p>Administracion:___________________________</p>

    </div>
@endsection
