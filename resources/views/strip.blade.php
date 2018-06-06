@include('include.naslov')
@include('include.styles')
@include('include.navbar')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card onelined">
              <div class="card-header lead borde text-light txshad text-lg-center" style="font-family: Arial">Mjesto za unos stripa</div>
              <div class="col-lg-offset-4 col-lg-4" style="font-family: Arial;">
                <center><h1>Upload file</h1></center>
    		<form action="{{ route('file.strip') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   <input type="file" id="fileUp" name="fileUp">           
                   <button type="submit" class="btn btn-primary" style="margin-top:10px;">Unesite strip</button>
                    </form>
              </div>
              <br>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
