@extends('home')

@section('css')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

@endsection
@section('content')

<div id="titulo">
      <h4><img src="{{ Vite::asset('resources/images/CAPS.jpg')}}" alt=""  width="80" height="80">CAPS PLAN NICARAGUA LA UNION "ENMANUEL"<img src="{{ Vite::asset('resources/images/agua.jpg')}}" width="80" height="80"></h4>
</div>
  </div>
</nav>


            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button> 
 
            </div>

            <table class="table" id="datatable">
                <thead id="tabla">
                    <tr >
                        <th scope="col" width= "1" style="background-color:#DBEAEA;">ID</th>
                        <th scope="col" width= "20%" style="background-color:#DBEAEA;">Nombre</th>
                        <th scope="col" width= "10%" style="background-color:#DBEAEA;">Cedula</th>
                        <th scope="col" width= "5%" style="background-color:#DBEAEA;">N medidor</th>
                        <th scope="col" width= "1%" style="background-color:#DBEAEA;">Lec. Actual</th>
                        <th scope="col" width= "1%" style="background-color:#DBEAEA;">Lec. Anterior</th>
                        <th scope="col" width= "5%" style="background-color:#DBEAEA;">C/Mensual</th>
                        <th scope="col" width= "60" style="background-color:#DBEAEA;">Monto a pagar</th>
                        <th scope="col" width= "60" style="background-color:#DBEAEA;">Mora</th>
                        <th scope="col" width= "60px" style="background-color:#DBEAEA;">Direccion</th>
                        <th scope="col" width= "60" style="background-color:#DBEAEA;">Fecha</th>
                        <th scope="col" width= "60" style="background-color:#DBEAEA;">Acciones</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <th>{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->identification }}</td>
                            <td>{{ $contact->measurer }}</td>
                            <td>{{ $contact->current_reading }}</td>
                            <td>{{ $contact->previous_reading }}</td>
                            <td>{{ $contact->monthly_consumption }}</td>
                            <td>{{ $contact->amount_payable }}</td>
                            <td>{{ $contact->arrears }}</td>
                            <td>{{ $contact->location }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{ $contact->id }}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal"
                                    data-bs-target="#delete-{{ $contact->id }}">
                                    Eliminar
                                </button>
                               <!-- <a href="{{ route('contacts.pdf', ['contact' => $contact->id]) }}" class="btn btn-primary btn-sm ">PDF</a> -->
                                <a href="{{ route('contacts.show', ['contact' => $contact->id]) }}" class="btn btn-primary btn-sm ">Factura</a>
                            </td>
                            
                        </tr>

                        @include('contacts.modal-info')
                    @endforeach


                </tbody>
            </table>
            @section('js')
          <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
          <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
          

          
          <script>new DataTable('#datatable');</script>
          @endsection
        </div>
        @include('contacts.modal-create')
    </div>
    <div class="col-md-2"></div>
    </div>
@endsection