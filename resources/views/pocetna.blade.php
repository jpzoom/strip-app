@extends('layouts.aplikacija') <!-- poziva layout iz layouts/aplikacija.blade.php -->
@section('content')



@section('sidebar')
@endsection
  @section('tijelo')
    @parent <!-- preuzima "sidebar" iz views/include/sidebar -->
    <div><br></div>
    <h2>Početna stranica</h2>
    <p>Ovdje će ići nešto kasnije</p>

@endsection
