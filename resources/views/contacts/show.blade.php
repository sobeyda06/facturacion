@extends('layouts.app')

@section('css')
    <style>
        #tabla {
            width: 450px;
            padding: 20px;
            border: 1px solid gray;
        }

        #encabezado {
            font-family: 'Bahnschrift';
            text-align: center;
            line-height: 1.8em;
        }

        #title {
            font-family: 'Bahnschrift';
            text-align: center;
            line-height: 1.8em;
        }

        #tit {
            font-family: 'Bahnschrift';
            text-align: center;
            line-height: 110%;

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
        #caps{
            font-family: 'Bahnschrift';
            text-align: center;
        }
        #admin{
            font-family: 'Bahnschrift';
            text-align: center;
        }

        #number{
            color: red;
            text-align: right;
        }
    </style>
@endsection

@section('content')
    <div id="tabla">
        <div id="titulo">
            <p id="caps">
                CAPS PLAN NICARAGUA
            </p>
        </div>

        <p id="tit"> LA UNION "ENMANUEL" <br />Comite de agua potable "PLAN NICARAGUA" <br />Barrio Plan Nicaragua La Union-RUC:J0810000400833</p>
     
        <h5>FACTURA Y ESTADO DE CUENTA</h5>
       <p id="number" > No {{ $invoiceNumber ?? $contact->id }} </p>

        <p id="name">Nombre: {{ $contact->name }} </p>
        <p>Cedula: {{ $contact->identification }}</p>

        <p id="medidor">Numero de medidor: {{ $contact->measurer }}</p>

        <p>Lectura anterior: {{ $contact->previous_reading }}</p>

        <p>Lectura actual: {{ $contact->current_reading }}</p>

        <p id="consumo">Consumo mensual: {{ $contact->monthly_consumption }}</p>

        <p>Monto a pagar: {{ $contact->amount_payable }}</p>

        <p>Mora: {{ $contact->arrears }}</p>

        <p id="dir"> Direccion:{{ $contact->location }}</p>

        <p>Observaciones:________________________________________</p>

        <br />
        <p id="admin" >Administracion:___________________________<br />
        Haciendo buen uso del agua, pagamos menos.<br />
        NOTA: Con 2 meses pendientes de pago, se corta el servicio</p>

    </div>
@endsection