<!DOCTYPE html>
<html lang="en" dir="ltr" >

<title>{{ config('app.name', 'Strip preglednik') }}</title>
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/proba.css">
<link rel="stylesheet" href="css/sass.css">
<link rel="stylesheet" href="css/FeedEk.css">
<link rel="stylesheet" href="css/css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>


  <head>
    <meta charset="utf-8">
    @include('include.naslov')
  </head>
  <body>
    @include('include.navbar')
    <br>

      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif



    <div class="container-fluid">
      <div class="row">

            <div class="col-md-12 col-lg-12">

              @include('include.kateg')

            </div>

      </div>
</div>

  </body>
    @include('include.footer')
</html>
