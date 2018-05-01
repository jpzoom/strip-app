@extends('layouts.aplikacija') <!-- poziva layout iz layouts/aplikacija.blade.php -->
@section('content')

<h1>Vjeverix - preglednik stripova</h1>
<h2>Vaš korisnički profil</h2>

@section('tijelo')
  @parent
  <p>Ovo je mjesto za korisnički profil</p>

@endsection
