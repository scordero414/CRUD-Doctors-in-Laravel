@extends('dashboard.master')
@section('contenido')
    <a href="{{ route('doctor.create')}}" target="_blank" class="btn btn-success mt-3">Añadir Doctor</a>
    <h2 class="text-center mb-5"> Lista de doctores registrados.</h2>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">RUT</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Dirección</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($doctors as $doctor)
                <tr>
                    <th scope="row">{{ $doctor->id }}</th>
                    <td>{{ $doctor->rut }}</td>
                    <td>{{ $doctor->first_name }}</td>
                    <td>{{ $doctor->last_name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->speciality }}</td>
                    <td>
                        <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-success">Modificar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
{{ $doctors->links() }}
