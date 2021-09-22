@extends('dashboard.master')
@section('contenido')
<div class="container">
    @include('dashboard.partials.validation-error')
    <div class="jumbotron">
        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="rut" class="form-label">RUT*</label>
                    <input readonly class="form-control" type="text" name="rut" id="rut" value="{{ $doctor -> rut }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="first_name" class="form-label">Nombre*</label>
                    <input readonly class="form-control" type="text" name="first_name" id="first_name" value="{{ $doctor -> first_name }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="last_name" class="form-label">Apellido*</label>
                    <input readonly class="form-control" type="text" name="last_name" id="last_name" value="{{ $doctor -> last_name }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input readonly class="form-control" type="email" name="email" id="email" value="{{ $doctor -> email }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="address" class="form-label">Dirección</label>
                    <input readonly class="form-control" type="text" name="address" id="address" value="{{ $doctor -> address }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="speciality" class="form-label">Especialidad</label>
                    <input readonly class="form-control" type="text" name="speciality" id="speciality" value="{{ $doctor -> speciality }}">
                </div>
            </div>
        </div>

        <div>
            <div class="form-group">
                <button type="button" class="btn btn-danger" href="{{URL::previous()}}">Cancelar</button>
            </div>
        </div>
    </div>
</div>
@endsection