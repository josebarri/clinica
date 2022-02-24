<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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


        <div align="center" style="padding-top:100px;">

        <table>
            <tr style="background-color:#00D9A5;">

                <th   style="padding: 10px;">Paciente</th>
                <th   style="padding: 10px;">Correo</th>
                <th   style="padding: 10px;">Veterinario</th>
                <th   style="padding: 10px;">Fecha-Hora</th>
                <th   style="padding: 10px;">Mensaje</th>
                <th   style="padding: 10px;">Estado</th>
                <th   style="padding: 10px;">Atender</th>
                

            </tr>

            
            @foreach($data as $appoint)

            <tr style="background-color: #fff;" align="center">
                <td  style="color:black; border: 1px solid #E5E3C9;">{{$appoint->nombre}}</td>
                <td  style="color:black; border: 1px solid #E5E3C9;">{{$appoint->correo}}</td>
                <td  style="color:black; border: 1px solid #E5E3C9;">{{$appoint->doctor}}</td>
                <td  style="color:black; border: 1px solid #E5E3C9;">{{$appoint->date}}</td>
                <td  style="color:black; border: 1px solid #E5E3C9;">{{$appoint->mensaje}}</td>
                <td  style="color:black; border: 1px solid #E5E3C9;">{{$appoint->estado}}</td>
                <td>
                <a class="btn btn-primary " href="{{url('atendida',$appoint->id)}}">Atender</a>
                </td>
               
                
           </tr>
           @endforeach
        </table>


        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
