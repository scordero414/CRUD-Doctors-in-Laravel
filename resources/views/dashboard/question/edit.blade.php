@extends('dashboard.master')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <form action="{{route('question.update', $question->id)}}" method="post">
        @method('put')
        @include('dashboard.question._form')

    </form>
@endsection