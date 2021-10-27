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
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                            data-id="{{ $doctor->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
{{ $doctors->links() }} 

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-muted">¿Seguro que deseas eliminar la mascota seleccionada?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="eliminarMascota" action="{{ route('doctor.destroy', 0) }}"
                    data-action="{{ route('doctor.destroy', 0) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
            $('#exampleModal').on('show.bs.modal', function(event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal
                        var id = button.data('id') // Extract info from data-* attributes
                        action =$('#eliminarMascota').attr('data-action').slice(0, -1)
                        action += id
                        $('#eliminarMascota').attr('action', action)
                        var modal = $(this)
                        modal.find('.modal-title').text('Vas a eliminar la mascota '+id)
                    });
    };
</script>
