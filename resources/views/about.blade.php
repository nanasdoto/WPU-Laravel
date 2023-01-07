@extends('layouts.main')
@section('container')
  <h1>Name : {{ $name }} </h1>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="Kanebo" width="200">
@endsection
