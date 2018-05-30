@include('include.naslov')
@include('include.styles')
@include('include.navbar')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card onelined">
              <div class="card-header lead borde text-light txshad text-lg-center" style="font-family: Arial">Kategorije favorita</div>
              <div class="card-body" style="font-family: Arial;">
                <table class = "table table-striped table-hover text-center">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Naslov</th>
                      <th>Postupak</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($favoriti) > 0)
                      @foreach($favoriti -> all() as $fav)

                    <tr>
                      <td>{{ $fav -> id}}</td>
                      <td>{{ $fav -> Naziv_kategorije}}</td>
                      <td style="font-family: Tahoma;">
                        <a href='{{ url("/readFavourites/{$fav ->id}") }}' class="btn btn-sm btn-primary anlined">Prikaži</a>
                      </td>
                    </tr>

                    @endforeach
                  @endif
                  </tbody>
                </table>
              </div>
              <br>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
