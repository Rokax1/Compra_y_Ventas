
@extends("layouts.LandingPage.layout")
@section('titulo')
    Producto
@endsection

@section('contenido')
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
 <!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">
      <div class="portfolio-details-container">

        <div class="owl-carousel portfolio-details-carousel">
          <img src="https://via.placeholder.com/800" width="500px"  height="500px" alt="">
          <img src="{{asset("assets/LandingPage/img/portfolio/portfolio-details-2.jpg")}}"  class="img-fluid" alt="">
          <img src="{{asset("assets/LandingPage/img/portfolio/portfolio-details-3.jpg")}}"  class="img-fluid" alt="">
        </div>

        <div class="portfolio-info">
          <h3>{{$product->product->name}}</h3>
          <ul>
            <li><strong>Category</strong>: Web design</li>
            <li><strong>Vendedor</strong>:{{$product->user->name}}</li>
            <li><strong>valor</strong>:$ {{$product->product->price}}</li>
            <li><strong>Fecha Termino oferta</strong>: {{$product->product->created_at}}</li>
            <li> <a href="" class="btn btn-success"> Añadir al carrito <i class="fas fa-cart-plus"></i></a> </li>

          </ul>
        </div>

      </div>

      <div class="portfolio-description">
        <h2>{{$product->product->name}}</h2>
        <p>
        {{$product->product->description}}
        </p>
      </div>

    </div>
  </section><!-- End Portfolio Details Section -->



    </div>
</section>

@endsection
