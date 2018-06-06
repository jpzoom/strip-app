<!--
<?php
$html = "";
$url = "http://feeds.feedburner.com/crunchyroll/animenews";
$xml = simplexml_load_file($url);
  for($i = 0; $i < 10; $++) {

  }
echo html;
?>
-->
<?php

$feed = Feeds::make('http://feeds.feedburner.com/crunchyroll/animenews');

public function demo() {
    $feed = Feeds::make('http://blog.case.edu/news/feed.atom', true); // if RSS Feed has invalid mime types, force to read
    $data = array(
      'title'     => $feed->get_title(),
      'permalink' => $feed->get_permalink(),
      'items'     => $feed->get_items(),
    );

    return View::make('feed', $data);
  }

?>
