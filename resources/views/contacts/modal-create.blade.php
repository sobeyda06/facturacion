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
                    <label form="name">Nombre</label>
                    <input type="text" name="name" class="form-control">
                    @error('identification')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="identification">Cedula</label>
                    <input type="text" name="identification" class="form-control">
                    @error('measurer')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="measurer">N medidor</label>
                    <input type="text" name="measurer" class="form-control">

                    @error('current_reading')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="current_reading">Lectura actual</label>
                    <input type="number" name="current_reading" class="form-control" id="current_value" name="current_value">

                    @error('previous_reading')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="previous_reading">Lectura anterior</label>
                    <input type="number" name="previous_reading" class="form-control" id="old_value" name="old_value">

                    @error('monthly_consumption')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="monthly_consumption">Consumo mensual</label>
                    <input type="number" name="monthly_consumption" class="form-control" id="monthly_consumption" readonly disabled />
                    @error('amount_payable')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="amount_payable">Monto a pagar</label>
                    <input type="text" name="amount_payable" class="form-control">
                    @error('arrears')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="arrears">Mora</label>
                    <input type="text" name="arrears" class="form-control">
                    @error('location')
                        <small>
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <label form="location">direccion</label>
                    <input type="text" name="location" class="form-control">

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
