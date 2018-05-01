@extends('layouts.aplikacija') <!-- poziva layout iz layouts/aplikacija.blade.php -->
@section('content')


<h2>Unesi strip</h2>

@section('tijelo')
  @parent
  <p>Ovo je mjesto za unos stripa</p>

@endsection
