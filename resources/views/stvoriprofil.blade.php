@extends('layouts.aplikacija') <!-- poziva layout iz layouts/aplikacija.blade.php -->
@section('tijelo')
  @parent
  <h2>Stvaranje korisničkog profila</h2>
  <br>
  {!! Form::open(['url' => 'createprofile/submit']) !!}

    <div class="form-group">
      {{Form::label('korime', 'Unesite korisničko ime')}}
      {{Form::text('korime', '', ['class' => 'form-control', 'placeholder' => '_'])}}
    </div>

    <div class="form-group">
      {{Form::label('email', 'Unesite email')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => '_'])}}
    </div>
<!-- skrivena lozinka Form::password -->
    <div class="form-group">
      {{Form::label('lozinka', 'Unesite lozinku')}}
      {{Form::password('secret', ['class' => 'form-control', 'placeholder' => '_'])}}
    </div>

    <div class="form-group">
      {{Form::label('potvrda', 'Potvrdite lozinku')}}
      {{Form::password('secret2', ['class' => 'form-control', 'placeholder' => '_'])}}
    </div>

    <div class="form-group">
      {{Form::label('prSlika', 'Unesite profilnu sliku')}}
      {{Form::text('prSlika', '', ['class' => 'form-control', 'placeholder' => '_'])}}
    </div>


<div class="text-right">
    {{Form::submit('Potvrdite informacije', ['class' => 'btn btn-primary'])}}
</div>
  {!! Form::close() !!}
<br>
<div >
  @include('include.error')
</div>

@endsection
