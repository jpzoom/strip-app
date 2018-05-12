@section('sidebar')
<div class="card container lined justify-content-center">
  <h3 class="card-header row borde text-light txshad">Prvo</h3>
  <p><br>Ovo je lijevi sidebar</p>

  @section('postJquery')
  @yield('rss')
<div id="divRss"></div>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/moment-with-locales.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/FeedEk.js') }}"></script>


    <script type="text/javascript" src="{{ asset('js/FeedEk.js') }}">
          $('#divRss').FeedEk({
              FeedUrl: 'http://feeds.feedburner.com/crunchyroll/animenews',
              MaxCount: '5'
          })
    </script>


</div>
