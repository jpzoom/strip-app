@extends('layouts.app')
@include('include.naslov')
@section('content')
@include('include.styles')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card onelined">
              <div class="card-header lead borde text-light txshad text-lg-center" style="font-family: Arial">Vaš profil: {{ Auth::user()->name }}</div>

                <div class="card-body" style="font-family: Arial;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div  style=" padding-left: 40px; padding-bottom:40px;display: block; margin-left: auto; margin-right: auto; width: 40%;">
                    <table style=" padding:100px; border-bottom: solid; border-width: 1px; border-color: grey;">

                        <th style="padding: 2rem">
                          <div class="float-left">
                              <img class="picshad" src="images/avatars/{{ $user -> avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right: 5px;">
                          </div>
                        </th>


                        <th style="padding-left: 10px;">
                        <div style="margin-bottom:5px; border-bottom: solid; border-color: grey; border-width: 1px;">Korisničko ime: </div><div style="font-weight: normal; font-size: 14px;">{{ Auth::user()->name }}</div>
                        <div style="margin-bottom:5px; margin-top:15px; border-bottom: solid; border-color: grey; border-width: 1px;">Email: </div><div style="font-weight: normal; font-size: 14px;">{{ Auth::user()->email }}</div>
                        </th>

<!-- PROFILNA SLIKA -->
                          <br>
                    </table >
                      <br>
                    <form enctype="multipart/form-data" action="/stripapp/public/profile" method="POST">
                      <label>Želite li promjeniti profilnu sliku?</label><br>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">  <!-- @csrf -->
                        <input type="submit" class="btn btn-primary">
                    </form>
                  </div>
                        <br>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
