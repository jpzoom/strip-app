@extends('layouts.aplikacija') <!-- poziva layout iz layouts/aplikacija.blade.php -->
@section('content')

<h1>Vjeverix - preglednik stripova</h1>
<h2>Početna stranica</h2>

@section('sidebar')
  @parent <!-- preuzima "sidebar" iz views/include/sidebar -->
  <p>Ovo je priključeno sidebar-u</p>

@endsection
