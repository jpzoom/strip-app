<div class="">
  @include('include.naslov')
  @include('include.navbar')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="form-horizontal" method="POST" action=" {{url('/insertkorkategoriju')}} "> @csrf
          <fieldset>
            <br>
            <div class="card lined">
            <legend class="card-header lead borde text-light txshad">Unos korisničke kategorije</legend>
            @if(count($errors)>0)
              @foreach($errors->all() as $error)
                <div class="alert alert-danger"> {{$error}} </div>
              @endforeach
            @endif
            <div class="form-group">
              <br>
              <label for="inputEmail" class="col-lg-6 control-label">Naziv korisničke kategorije</label>
              <div class="col-lg-10">
                <input type="text" name="kategorija" class="form-control" id="inputEmail" placeholder="Korisnička kategorija">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Potvrdi</button>
                <a href="{{ url('/category') }}" class="btn btn-danger" >Povratak</a>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    </div>
  </div>
  @include('include.footer')
</div>
