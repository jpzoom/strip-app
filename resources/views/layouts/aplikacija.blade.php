<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="utf-8">
    
    <title>{{ config('app.name', 'Strip preglednik') }}</title>
    <link rel="stylesheet" href="css/app.css">
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
