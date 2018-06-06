@section('sidebard')
<div class="card container lined justify-content-center">
  <h3 class="card-header row borde text-light txshad">Ostalo</h3>
  <p><br> Ovo je desni sidebar</p>
  @show <!-- omogućuje prikaz -->

  <div id="divRss"></div>
  <script type="text/javascript" src="{{ asset('js/FeedEk.js') }}">
        $('#divRss').FeedEk({
            FeedUrl: 'http://feeds.feedburner.com/crunchyroll/animenews',
            MaxCount: '5'
        })
  </script>
</div>
