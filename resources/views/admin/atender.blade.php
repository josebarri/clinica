<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
      label
      {
        display: inline-block;
        width: 200px;
      }


    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.barralateral')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->



  
        <div class="container-fluid page-body-wrapper">

        <div  class="container" align="center"  style="margin-top: 100px;">
          @if(session()->has('message'))

        <div  class="alert alert-success">

            <button type="" class="close" data-dismiss="alert">X</button>
               {{session()-> get ('message')}}

               </div>

          @endif
        
          
        
          <form action="{{url('atender')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="margin: 15px;">

              <label> Nombre Veterinario</label>
              <input type="text"  style="color:black" name="nombreveterinario" placeholder=""required=""  >

            </div>

            <div style="margin: 15px;">

              <label>Nombre Paciente</label>
              <input type="text"  style="color:black" name="nombrepaciente" placeholder="" required="" >

            </div>
            @foreach($data as $appoint)

            <div style="margin: 15px;">
            
              <label> servicio</label>

              <select name="servicio" style="color: black;  width: 200px;" required="">
                <option  >--seleccionar--</option>
                <option style="color: black;" value="limpieza">Limpieza</option>
                <option value="chequeo general">Chequeo general</option>
                <option value="cirugía">Cirugía</option>
                <option value="corte de pelo">Corte de pelo</option>

              </select>

            </div>
            <input type="submit" class="btn btn-success">

            <a class="btn " href="{{url('atendida',$appoint->id)}}"><img src="https://cdn-icons.flaticon.com/png/512/2550/premium/2550270.png?token=exp=1645156758~hmac=1877ddce230406c6cf2607fc88bcf074" alt="" width="40px" height="40px"></a>
            
            


          </form>
         
          @endforeach
        </div>

        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>