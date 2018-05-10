<html>

    <meta charset="UTF-8"/>
    <link href="css/Feedek.css" rel="stylesheet"/>

    <body>
        <div>
            <div id="divRss"></div>
        </div>

        <div>

        <script type="text/javascript" src="{{ URL::asset(js/jquery.min.js) }}"></script>
        <script type="text/javascript" src="{{ URL::asset(js/moment-with-locales.js) }}"></script>
        <script type="text/javascript" src="{{ URL::asset(js/FeedEk.js) }}"></script>
        <script type="text/javascript">
            $('#divRss').FeedEk({
                FeedUrl: 'http://feeds.feedburner.com/crunchyroll/animenews',
                MaxCount: '5'
            })
        </script>
        </div>
    </body>

</html>
