<!-- Modal edit -->
<div class="modal fade" id="edit-{{ $contact->id }}" tabindex="-1" role="dialog"
    aria-labelledby="edit-{{ $contact->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-{{ $contact->id }}">Editar nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action=" {{ route('contacts.update', ['contact' => $contact->id]) }} " method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label form="name">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ $contact->name }}">

                    <label form="identification">Cedula</label>
                    <input type="text" name="identification" class="form-control"
                        value="{{ $contact->identification }}">

                    <label form="measurer">N medidor</label>
                    <input type="text" name="measurer" class="form-control" value="{{ $contact->measurer }}">

                    <label form="current_reading">Lectura actual</label>
                    <input type="text" name="current_reading" class="form-control"
                        value="{{ $contact->current_reading }}">

                    <label form="previous_reading">Lectura anterior</label>
                    <input type="text" name="previous_reading" class="form-control"
                        value="{{ $contact->previous_reading }}">

                    <label form="monthly_consumption">Consumo mensual</label>
                    <input type="text" name="monthly_consumption" class="form-control"
                        value="{{ $contact->monthly_consumption }}">

                    <label form="amount_payable">Monto a pagar</label>
                    <input type="text" name="amount_payable" class="form-control"
                        value="{{ $contact->amount_payable }}">

                    <label form="arrears">Mora</label>
                    <input type="text" name="arrears" class="form-control" value="{{ $contact->arrears }}">

                    <label form="location">Direccion</label>
                    <input type="text" name="location" class="form-control" value="{{ $contact->location }}">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal delete-->
<div class="modal fade" id="delete-{{ $contact->id }}" tabindex="-1" role="dialog"
    aria-labelledby="delete-{{ $contact->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete-{{ $contact->id }}">Eliminar </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }} " method="POST">
                @csrf
                @method('DELETE')

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
