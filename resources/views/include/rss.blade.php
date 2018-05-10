
    <meta charset="UTF-8"/>
    <link href="css/Feedek.css" rel="stylesheet"/>

    <body>
        <div>
            <div id="divRss"></div>
        </div>

        <div>


        <script type="text/javascript">
            $('#divRss').FeedEk({
                FeedUrl: 'http://feeds.feedburner.com/crunchyroll/animenews',
                MaxCount: '5'
            })
        </script>
        </div>
    </body>
