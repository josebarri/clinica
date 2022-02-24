
         
      @foreach($producto as $productos)

        

        


  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Nuestros Productos</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Productos</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="doctorimagen/{{$productos->imagen}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html"></a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                  </div>
                  <span>{{$productos->nombre}}</span>
                </div>
                <span></span>COP:{{$productos->precio}}
              </div>
            </div>
          </div>
        </div>
       

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="blog.html" class="btn btn-primary">Leer Más</a>
        </div>

      </div>
    </div>
  </div>

  @endforeach