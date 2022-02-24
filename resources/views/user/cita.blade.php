
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Haga una Cita</h1>

      <form class="main-form"  action="{{url('cita')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="correo" class="form-control" placeholder="Direccion de correo Electronico">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="datetime-local" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="doctor" class="custom-select">
             
            <option>--Seleccionar Veterinario--</option>

            @foreach($doctor as $doctors)
           
            <option value="{{$doctors->nombre}} ">{{$doctors->nombre}}-{{$doctors->especialidad}} </option>
             
            
            @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="telefono" class="form-control" placeholder="Número">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="mensaje" id="mensaje" class="form-control" rows="6" placeholder="Ingrese mensaje.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Enviar Peticion</button>
      </form>
    </div>
  </div> <!-- .page-section -->

 