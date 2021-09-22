@extends('dashboard.master')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <form action="{{route('doctor.update', $doctor->id)}}" method="post">
        @method('put')
        @include('dashboard.doctor._form')

    </form>
@endsection