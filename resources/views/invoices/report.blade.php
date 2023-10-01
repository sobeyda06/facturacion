@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Numero de reporte</th>
                <th>Nombre de contacto</th>
                <th>Consumo mensual</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->number }}</td>
                    <td>{{ $invoice->contact->name }}</td>
                    <td>{{ $invoice->contact->monthly_consumption }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
