<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  @include('include.naslov')
  @include('include.navbar')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <br>
          <legend class="card-header lead borde txshad"> {{$favoriti->Naziv_kategorije}} </legend>
      </div>
    </div>
    </div>
  </div>
  @include('include.footer')
