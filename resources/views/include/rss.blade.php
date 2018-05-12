
    <meta charset="UTF-8"/>

    <body>
        <div>
          @section('postJquery')
          <div id="divRss"></div>
          <script type="text/javascript">
              $('#divRss').FeedEk({
                  FeedUrl: 'http://feeds.feedburner.com/crunchyroll/animenews',
                  MaxCount: '5'
              })
          </script>
          @endsection

        </div>
    </body>
