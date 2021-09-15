@extends('app')

@section('content')

<section class="mainContent portfolio-3">
   <div class="col-md-12 portfolio-wrapper">
   <div class="portfolio-style-3">
   <div class="portfolio-style-3-filter">
    <ul>
      <a href="#portfolio-item-3"><li class="slug-portfolio-item-3 active">Todas</li></a>
      <a href="#industriales"><li class="slug-industriales"><span>/</span>Industriales</li></a>
      <a href="#pymes"><li class="slug-pymes"><span>/</span>PYMES</li></a>
      <a href="#regalos"><li class="slug-regalos"><span>/</span>Regalos Corporativos</li></a>
      <a href="#deportiva"><li class="slug-regalos"><span>/</span>Deportiva</li></a>
    </ul>
   </div>
   <div class="clearfix"></div>
   <div class="portfolio-3-wrapper">
   <div class="grid-sizer"></div>
 
      <!--Imagen de la galeria-->
      @foreach ($fotos as $foto)
         <article class="portfolio-item-3 {{$foto->categoria}}">
            
            <div class="portfolio-thumbnail">
            <img src="{{$foto->path}}" alt="Ropa personalizada Industrial Chile Estampados y serigrafia ${{$foto->categoria}} {{$foto->titulo}}">
               <span class="overthumb"></span>
               <div class="carousel-icon">
               <a href="#" class="postlink">
               <i class="vertec-link"></i>
               </a>
               </div>
            </div>
            <div class="portfolio-content">
            <h4 class="portfolio-title">{{$foto->titulo}}</h4>
            <p>{{$foto->descripcion}}</p>
      
            </div>
            <div class="clearfix"></div>
         </article>  
      @endforeach
      




    </div>
   </div>
   </div>
  </section>
 

@endsection