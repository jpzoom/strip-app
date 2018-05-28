  @include('include.naslov')
  @include('include.navbar')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <br>
          <legend class="card-header lead borde text-light txshad"> {{$kategorije->Naziv_korisnicke_kategorije}} </legend>
      </div>
    </div>
    </div>
  </div>
  @include('include.footer')
