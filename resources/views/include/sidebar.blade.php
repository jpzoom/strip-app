@section('sidebar')
<div class="card kontejner lined justify-content-center">
  <h3 class="card-header row borde text-light txshad" style="font-family: Arial">RSS</h3>

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/moment-with-locales.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/FeedEk.js') }}"></script>
  <br>
  @include('include.rss')
</div>
