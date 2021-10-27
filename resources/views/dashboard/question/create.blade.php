@extends('dashboard.master')
@section('contenido')
    <form action="{{route('question.store')}}" method="post">
        @include('dashboard.question._form')
    </form>
@endsection