@extends('layouts.aplikacija') <!-- poziva layout iz layouts/aplikacija.blade.php -->
@section('content')


<h2>Vaš korisnički profil</h2>

@section('tijelo')
  @parent
  {!! Form::open(['url' => 'profil/submit']) !!}
    <div class="form-group">
      {{Form::label('Kor-ime', 'Korisničko ime')}}
      {{Form::text('Kor-ime', '', ['class' => 'form-control', 'placeholder' => 'Unesite korisničko ime'])}}
    </div>

    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Unesite email'])}}
    </div>

    <div class="form-group">
      {{Form::label('Lozinka', 'Lozinka')}}
      {{Form::text('Lozinka', '', ['class' => 'form-control', 'placeholder' => 'Unesite lozinku'])}}
    </div>

    <div class="form-group">
      {{Form::label('Potvrda', 'Potvrdite lozinku')}}
      {{Form::text('Potvrda', '', ['class' => 'form-control', 'placeholder' => 'Potvrdite lozinku koju ste unesli'])}}
    </div>

    {{Form::submit('Potvrdite unos', ['class' => 'btn btn-primary'])}}

  {!! Form::close() !!}

@endsection
