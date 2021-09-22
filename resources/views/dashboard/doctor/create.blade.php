@extends('dashboard.master')
@section('contenido')
    <form action="{{route('doctor.store')}}" method="post">
        @include('dashboard.doctor._form')
    </form>
@endsection