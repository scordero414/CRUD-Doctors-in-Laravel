@extends('dashboard.master')
@section('contenido')
    <a href="{{ route('question.create')}}" class="btn btn-success mt-3">Añadir Cuestionario</a>
    <h2 class="text-center mb-5"> Lista de cuestionarios registrados.</h2>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Answer1</th>
                <th scope="col">Answer2</th>
                <th scope="col">Answer3</th>
                <th scope="col">Answer4</th>
                <th scope="col">Answer5</th>
                <th scope="col">Answer6</th>
                <th scope="col">Answer7</th>
                <th scope="col">Answer8</th>
                <th scope="col">Answer9</th>
                <th scope="col">Answer10</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($questions as $question)
                <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->answer1 }}</td>
                    <td>{{ $question->answer2 }}</td>
                    <td>{{ $question->answer3 }}</td>
                    <td>{{ $question->answer4 }}</td>
                    <td>{{ $question->answer5 }}</td>
                    <td>{{ $question->answer6 }}</td>
                    <td>{{ $question->answer7 }}</td>
                    <td>{{ $question->answer8 }}</td>
                    <td>{{ $question->answer9 }}</td>
                    <td>{{ $question->answer10 }}</td>

                    <td>
                        <a href="{{ route('question.show', $question->id) }}" class="btn btn-primary btn-block">Ver</a>
                        <a href="{{ route('question.edit', $question->id) }}" class="btn btn-success btn-block">Modificar</a>
                        <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModal"
                            data-id="{{ $question->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
{{ $questions->links() }} 

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
                <label class="text-muted">¿Seguro que deseas eliminar el cuestionario seleccionado?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="eliminarCuestionario" action="{{ route('question.destroy', 0) }}"
                    data-action="{{ route('question.destroy', 0) }}" method="POST">
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
                        action =$('#eliminarCuestionario').attr('data-action').slice(0, -1)
                        action += id
                        $('#eliminarCuestionario').attr('action', action)
                        var modal = $(this)
                        modal.find('.modal-title').text('Vas a eliminar el cuestionario '+id)
                    });
    };
</script>
