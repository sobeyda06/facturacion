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

            <form action="{{ route('contacts.update', ['contact' => $contact->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <!-- Simplificar etiquetas y campos de entrada -->
                    <label for="name-{{ $contact->id }}">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ $contact->name }}">
                    
                    <label for="identification-{{ $contact->id }}">Cedula</label>
                    <input type="text" name="identification" class="form-control" value="{{ $contact->identification }}">
                    
                    <label for="measurer-{{ $contact->id }}">N medidor</label>
                    <input type="text" name="measurer" class="form-control" value="{{ $contact->measurer }}">
                    
                    <label for="current_value-{{ $contact->id }}">Lectura actual</label>
                    <input type="number" class="form-control" id="current_value-{{ $contact->id }}" name="current_reading" value="{{ $contact->current_reading }}">
                    
                    <label for="previous_value-{{ $contact->id }}">Lectura anterior</label>
                    <input type="number" class="form-control" id="previous_value-{{ $contact->id }}" name="previous_reading" value="{{ $contact->previous_reading }}">
                    
                    <label for="monthly_value-{{ $contact->id }}">Consumo mensual</label>
                    <input type="number" class="form-control" id="monthly_value-{{ $contact->id }}" name="monthly_consumption" value="{{ $contact->monthly_consumption }}">
                    
                    <label for="amount_payable-{{ $contact->id }}">Monto a pagar</label>
                    <input type="text" name="amount_payable" class="form-control" value="{{ $contact->amount_payable }}">
                    
                    <label for="arrears-{{ $contact->id }}">Mora</label>
                    <input type="text" name="arrears" class="form-control" value="{{ $contact->arrears }}">
                    
                    <label for="location-{{ $contact->id }}">Direccion</label>
                    <input type="text" name="location" class="form-control" value="{{ $contact->location }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

<script>
    // Calcular el valor del consumo mensual para el modal de edición
    (function() {
        const contactId = {{ $contact->id }}; // Obtén el ID del contacto actual
        const editCurrentValueField = document.getElementById('current_value-' + contactId);
        const editOldValueField = document.getElementById('previous_value-' + contactId);
        const editMonthlyConsumptionField = document.getElementById('monthly_value-' + contactId);

        editCurrentValueField.addEventListener('input', function() {
            const current = parseFloat(editCurrentValueField.value) || 0;
            const old = parseFloat(editOldValueField.value) || 0;
            const monthlyConsumption = current - old;
            editMonthlyConsumptionField.value = monthlyConsumption.toFixed(2);
        });
    })();
</script>



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
