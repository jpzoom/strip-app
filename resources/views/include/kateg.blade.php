<div class="container">
  <div class="row">
    <legend>Vaše kategorije</legend>
    @if(session('info'))
    <div class="alert alert-success"> {{session('info')}} </div>
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
          <td>
            <a href='{{ url("/readKorKateg/{$kategorija ->id}") }}' class="btn btn-sm btn-primary">Čitaj</a>
            <a href='{{ url("/updateKorKateg/{$kategorija -> id}") }}' class="btn btn-sm btn-success">Ažuriraj</a>
            <a href='{{ url("/deleteKorKateg/{$kategorija -> id}") }}' class="btn btn-sm btn-danger">Izbriši</a>
          </td>
        </tr>

        @endforeach
      @endif
      </tbody>
    </table>
    <div style="text-align:right;">
      <a href="{{ url('/stvorikategoriju') }}" class="btn btn-sm btn-primary" >Stvori novu kategoriju</a>
    </div>
  </div>
</div>
