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
        

        
          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="margin: 15px;">

              <label> Nombre Veterinario</label>
              <input type="text"  style="color:black" name="nombre" placeholder="ingrese elnombre"required="">

            </div>

            <div style="margin: 15px;">

              <label> Telefono</label>
              <input type="number"  style="color:black" name="telefono" placeholder="ingrese el numero" required="">

            </div>

            <div style="margin: 15px;">

              <label> Especialidad</label>

              <select name="especialidad" style="color: black;  width: 200px;" required="">
                <option  >--seleccionar--</option>
                <option style="color: black;" value="cardiología">Cardiología</option>
                <option value="anestesiología">Anestesiología</option>
                <option value="cirugía">Cirugía</option>
                <option value="dermatología">Dermatología</option>

              </select>

            </div>

            <div style="margin: 15px;">

              <label> Consultorio</label>
              <input type="text"  style="color:black" name="consultorio" placeholder="Numero del consultorio">

            </div>

            <div style="margin: 15px;">

              <label> Imagen</label>
              <input type="file" name="file">

            </div>

            <div style="margin: 15px;">

              
              <input type="submit" class="btn btn-success"> <a  style="background-color:#00D9A5;" class="btn "   href="{{url('mostrar_doctor')}}">Regresar</a>

            </div>


          </form>
         

        </div>

        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>

