<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    @error('name')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control">
                    @error('identification')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="identification">Cedula</label>
                    <input type="text" name="identification" class="form-control">
                    @error('measurer')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="measurer">N medidor</label>
                    <input type="text" name="measurer" class="form-control">

                    @error('current_reading')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="current_reading">Lectura actual</label>
                    <input type="number" class="form-control" id="current_reading" name="current_reading">

                    @error('previous_reading')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="previous_reading">Lectura anterior</label>
                    <input type="number" class="form-control" id="previous_reading" name="previous_reading">

                    @error('monthly_consumption')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="monthly_consumption">Consumo mensual</label>
                    <input type="number" class="form-control" id="monthly_consumption" name="monthly_consumption" readonly />
                    @error('amount_payable')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="amount_payable">Monto a pagar</label>
                    <input type="text" name="amount_payable" class="form-control">
                    @error('arrears')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="arrears">Mora</label>
                    <input type="text" name="arrears" class="form-control">
                    @error('location')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label for="location">direccion</label>
                    <input type="text" name="location" class="form-control">

<script>
    // Calcular el valor del consumo mensual para el modal de creación
    const createCurrentValueField = document.querySelector('#create [name="current_reading"]');
    const createOldValueField = document.querySelector('#create [name="previous_reading"]');
    const createMonthlyConsumptionField = document.querySelector('#create [name="monthly_consumption"]');
    
    createCurrentValueField.addEventListener('input', calculateMonthlyConsumption);
    createOldValueField.addEventListener('input', calculateMonthlyConsumption);

    function calculateMonthlyConsumption() {
        const current = parseFloat(createCurrentValueField.value) || 0;
        const old = parseFloat(createOldValueField.value) || 0;
        const monthlyConsumption = current - old;
        createMonthlyConsumptionField.value = monthlyConsumption.toFixed(2);
    }
</script>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
