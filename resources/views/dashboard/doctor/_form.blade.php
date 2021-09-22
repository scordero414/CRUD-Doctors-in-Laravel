@csrf
<div class="container">
    @include('dashboard.partials.validation-error')
    <div class="jumbotron">
        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="rut" class="form-label">RUT*</label>
                    <input class="form-control" type="text" name="rut" id="rut" value="{{ old('rut', $doctor->rut) }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="first_name" class="form-label">Nombre*</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', $doctor->first_name) }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="last_name" class="form-label">Apellido*</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $doctor->last_name) }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $doctor->email) }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="address" class="form-label">Dirección</label>
                    <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $doctor->address) }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="speciality" class="form-label">Especialidad</label>
                    <input class="form-control" type="text" name="speciality" id="speciality" value="{{ old('speciality', $doctor->address) }}">
                </div>
            </div>
        </div>

        <div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Aceptar</button>
                <button type="button" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>
