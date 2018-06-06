<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Strip preglednik') }}</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/proba.css">
    <link rel="stylesheet" href="css/sass.css">
    <link rel="stylesheet" href="css/FeedEk.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    @include('include.naslov')
  </head>
  <body>
    @include('include.navbar')
    <br>
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-3 col-lg-3">
          @include('include.sidebar')
          </div>

            <div class="col-md-6 col-lg-6">
              @include('include.tijelo')
            </div>

          <div class="col-md-3 col-lg-3">
          @include('include.sidebard')
        </div>

      </div>
</div>

  </body>
    @include('include.footer')
</html>
