@extends('layouts.app')
@include('include.naslov')
@section('content')
@include('include.styles')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header lead borde text-light txshad">Vaš profil: {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div>Korisničko ime: {{ Auth::user()->name }}</div>
                  <div>Korisničko ime: {{ Auth::user()->email }}</div>
                  <div>Korisničko ime: {{ Auth::user()->name }}</div>
                  <br>
                    Ulogirani ste.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
