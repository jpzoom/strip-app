<div class="container card lined">
  <div class="row ">
    <legend class="card-header lead borde text-light txshad">Vaše kategorije</legend>
    @if(session('info'))
    <div style="margin: 10px;" class="alert alert-success"> {{session('info')}} </div>
    @endif
    <table class = "table table-striped table-hover text-center">
      <thead>
        <tr>
          <th>ID</th>
          <th>Naslov</th>
          <th>Postupak</th>
        </tr>
      </thead>
      <tbody>
        @if(count($kategorije) > 0)
          @foreach($kategorije -> all() as $kategorija)

        <tr>
          <td>{{ $kategorija -> id}}</td>
          <td>{{ $kategorija -> Naziv_korisnicke_kategorije}}</td>
          <td style="font-family: Tahoma;">
            <a href='{{ url("/readKorKateg/{$kategorija ->id}") }}' class="btn btn-sm btn-primary anlined">Prikaži</a>
            <a href='{{ url("/updateKorKateg/{$kategorija -> id}") }}' class="btn btn-sm btn-success anlined">Ažuriraj</a>
            <a href='{{ url("/deleteKorKateg/{$kategorija -> id}") }}' class="btn btn-sm btn-danger anlined">Izbriši</a>
          </td>
        </tr>

        @endforeach
      @endif
      </tbody>
    </table>
    <div>
      <a href="{{ url('/stvorikategoriju') }}" class="btn btn-primary anlined" style="margin-left: 30px; margin-bottom: 10px; float: right;" >Stvori novu kategoriju</a>
    </div>
  </div>
</div>
