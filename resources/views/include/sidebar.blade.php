@section('sidebar')
<script type="text/javascript" src"js/jquery.min.js"></script>
<script type="text/javascript" src"js/moment-with-locales.js"></script>
<script type="text/javascript" src"js/FeedEk.js"></script>
<div class="card container lined justify-content-center">
  <h3 class="card-header row borde text-light txshad">Prvo</h3>
  <p><br>Ovo je lijevi sidebar</p>
  @show <!-- omogućuje prikaz -->
  @include("html/rss.html")
</div>
