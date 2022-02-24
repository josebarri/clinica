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
        


         <div style="padding-top:50px; width:100%">
         <h6 align="center" class="p-3 mb-0 ">GESTION DE PRODUCTOS </h6>
         <a  style="background-color:#00D9A5;" class="btn mb-3"   href="{{url('add_producto_view')}}">crear</a>

        <table align="center" id="producto" class="table table-striped" style="width:100%">
        <thead style="background-color:#00D9A5;" >
            <tr>
                <th style="padding:10px; color:white;">Producto</th>
                <th style="padding:10px; color:white;">Precio</th>
                <th style="padding:10px; color:white;">Stock</th>
                
                <th style="padding:10px; color:white;">Imagen</th>
                <th style="padding:10px; color:white;">Eliminar</th>
                <th style="padding:10px; color:white;">Editar</th>
                
            </tr>
        </thead>
        <tbody style="background-color:#fff;">
        @foreach($data as $producto)
            <tr>
                <td style="padding:10px; color:black;">{{$producto->nombre}}</td>
                <td style="padding:10px; color:black;">{{$producto->precio}}</td>
                <td style="padding:10px; color:black;">{{$producto->stock}}</td>
                
                <td style="padding:10px; color:black;"> <img  src="dortorimagen/{{$producto->imagen}}" alt="" width="60px" height="60px"></td>

                <td>
                <a class="btn " href="{{url('eliminarpro', $producto->id)}}" onclick="return confirm('¿estas seguro de eliminar esto?')"><img src="https://cdn-icons-png.flaticon.com/512/216/216658.png" alt="" width="40px" height="40px"></a>
                </td>

                <td>
                <a class="btn " href="{{url('editarpro', $producto->id)}}"><img src="https://cdn-icons-png.flaticon.com/512/2921/2921179.png" alt="" width="40px" height="40px"></a>
                </td>
                
            
            </tr>

        @endforeach

            

        </tbody>
        
    </table>
       
        </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>

