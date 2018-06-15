@include('include.naslov')
@include('include.styles')
@include('include.navbar')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card onelined">
              <div class="card-header lead borde text-light txshad text-lg-center" style="font-family: Arial">Mjesto za unos stripa</div>
              <div class="col-lg-offset-4 col-lg-4 text-lg-center" style="font-family: Arial;">
                <div  style=" padding-left: 40px; padding-bottom:40px;display: block; margin-left: auto; margin-right: auto; width: 40%;">
                    <br>
                    <form action="{{ route('zip.strip') }}" method="post" enctype="multipart/form-data">
                    @csrf
				
                   <input type="file" id="zip" name="zip">           
                   <button type="submit" class="btn btn-primary" style="margin-top:10px;">Unesite strip</button>
                    </form>
                    </div>
              </div>
              <br>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
