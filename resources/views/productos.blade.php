@extends('app')

@section('content')
<br>
<section class="mainContent blogPage">
   <div class="blogCategory">
       <ul>
           <!--Para que se muestren los colores en active debe tener el href con el slug-->
           <a href="#blogBox1"><li class="slug-blogBox1 active">TODOS</li></a>
           <a href="#poleras"><li class="slug-poleras">POLERAS Y POLERONES</li></a>
           <a href="#industriales"><li class="slug-industriales">INDUSTRIALES</li></a>
           <a href="#tazones"><li class="slug-tazones">VASOS Y TAZONES</li></a>
           <a href="#bolsas"><li class="slug-bolsas">BOLSAS Y MOCHILAS</li></a>
           <a href="#cajas"><li class="slug-cajas">CAJAS</li></a>
           <a href="#gorros"><li class="slug-gorros">GORROS</li></a>
           <a href="#otros"><li class="slug-otros">OTROS</li></a>
       </ul>
   </div>
   <div class="clearfix"></div>


   <!--Listado de productos-->

   <div class="blogContainer animated fadeInRightBig">
       <div class="blogSizer"></div>


      @foreach ($fotos as $producto)
         <div class="blogBox1 {{$producto->categoria}}">
            <div class="box1Thumb"><img src="{{$producto->path}}" alt="simple post">
            <span class="overthumb"></span>
            <div class="carousel-icon">
            <a href="#" class="postlink">
               Consulta por este producto <i class="bi bi-whatsapp"></i>
            </a>
            </div></div>
            <h3>{{$producto->titulo}}</h3>
      </div>
      @endforeach
       
   </div>


</section>  


@endsection


