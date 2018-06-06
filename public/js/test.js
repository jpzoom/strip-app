<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>RSS</title>
		<link href="css/Feedek.css" rel="stylesheet"/>
	</head>


    <body>


        <div>
	<p>TEST</p>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/moment-with-locales.js"></script>
        <script type="text/javascript" src="js/FeedEk.js"></script>

		<div>
            <div id="divRss"></div>
        </div>

		<script type="text/javascript">
            $('#divRss').FeedEk({
                FeedUrl: 'http://feeds.feedburner.com/crunchyroll/animenews',
                MaxCount: '5'
            })
        </script>


        </div>
    </body>

</html>


<!--
          <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
          <script type="text/javascript" src="FeedEk.js"></script>
          <script type="text/javascript" src="js/FeedEk.js"></script>
          <script type="text/javascript" src="js/jquery.min.js"></script>
          <script type="text/javascript" src="{{ URL::asset(js/moment-with-locales.js) }}"></script>


-->
