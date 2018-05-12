@extends('layouts.app')
@include('include.naslov')
@section('content')
@include('include.styles')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header lead borde text-light txshad">Vaš profil: {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="lead">

                        <th style="padding: 20px;">
                          <div class="float-left">
                              <img  src="images/avatars/{{ $user -> avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right: 5px;">
                          </div>
                        </th>


                        <th style="padding-left: 10px;">
                        <div style="margin-bottom:5px; border-bottom: solid; border-width: 1px;">Korisničko ime: </div><div style="font-weight: normal;">{{ Auth::user()->name }}</div>
                        <div style="margin-bottom:5px; margin-top:15px; border-bottom: solid; border-width: 1px;">Email: </div><div style="font-weight: normal;">{{ Auth::user()->email }}</div>
                        </th>

                        <div enctype="multipart/form-data" action="/profile" method="POST">
                          <label>Update profile image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token">@csrf
                            <input type="submit" class="btn btn-sm btn-primary">
                        </div>
                    </table>
                        <br>
                          Ulogirani ste.
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
