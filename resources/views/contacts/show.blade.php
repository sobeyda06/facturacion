@extends('home')
@section('content')

<style>
    #tabla{
        width: 700px;
        padding: 20px;
        border: 1px solid gray; 

        
    }
    #encabezado{
        font-family: 'Bahnschrift';
        text-align: center;
    }
    #title{
        font-family: 'Bahnschrift';
        text-align: center;
    } 
       #tit{
        font-family: 'Bahnschrift';
        text-align: center;
    }

    h5{
        font-family: 'Bahnschrift';
        text-align: center;
    }

    #encabezado2{

    font-family: 'Bahnschrift';
    color: '';
    text-align: center;

}

#name{
    font-family: 'Bahnschrift';
}
#medidor{
    font-family: 'Bahnschrift';
}
#consumo{
    font-family: 'Bahnschrift';
}

#dir{
    font-family: 'Bahnschrift';
}

#form{
    font-family: 'Consolas';
    border: 1px solid white; 
}
</style>
      
      <body>

    <div id="tabla">
    <div id="titulo">
      <a><img src="{{ Vite::asset('resources/images/CAPS.jpg')}}" alt=""  width="60" height="60">CAPS PLAN NICARAGUA<img src="{{ Vite::asset('resources/images/Puerto.jpg')}}" width="60" height="60"></a></div>
      <p id="tit"> LA UNION "ENMANUEL"</p>
        <p id="encabezado">Comite de agua potable "PLAN NICARAGUA"</P>
        <p id="title">Barrio Plan Nicaragua La Union-RUC:J0810000400833</P>
        <h5>FACTURA Y ESTADO DE CUENTA</h5>No<input type="text" id="form" ></input><br>
        <!-- <h3>Factura {{ $contact->id }}</h3> -->
        <p id="name">Nombre: {{ $contact->name }}&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Cedula: {{ $contact->identification }}</p>
        <p id="medidor">N medidor: {{ $contact->measurer }}&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Lectura actual: {{ $contact->current_reading }} &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Lectura anterior: {{ $contact->previous_reading }}</p>
        <p id="consumo">Consumo mensual: {{ $contact->monthly_consumption }}&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Monto a pagar: {{ $contact->amount_payable }} &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Mora: {{ $contact->arrears }}&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <p id="dir"> Direccion: {{ $contact->location }}&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Observaciones</p>
        <br><p>Administracion:___________________________</p>

    </div>
</body>
@endsection