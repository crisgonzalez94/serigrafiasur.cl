@extends('app')

@section('content')



<br>
<section class="mainContent blogPage">

   <div class="html_carousel animated fadeInDown">
      <div id="foo3">
        <div class="slide">
          <img src="https://res.cloudinary.com/hkwxndyh0/image/upload/v1636666521/banners/1-min_aeb43i.png" alt="carousel 1"/>
            <div class="slide-intro">
            <div class="container"><div class="row"><div class="span12">
            <div class="blog-date hidden-xs"><p class="day">26</p><p class="monthyear">FEB 2014</p></div>
            <div class="slide-excerpt">
            <h4>Biggest slider for <span>Blog Post</span> Ever!</h4>
            <p class="hidden-xs">Printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, the when an unknown printer took a galley of type and scrambled it to make a type specimen book vestibulum ut quam. Suspendisse interdum ipsum ornare porttitor porttitor...<a href="#">Read More</a></p>
            </div>
            <div class="pull-left"><p class="blog-meta hidden-xs">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a> | Comments: <a href="#">15</a></p></div>
            </div></div></div>
            </div>
        </div>
        <div class="slide">
          <img src="https://res.cloudinary.com/hkwxndyh0/image/upload/v1636666521/banners/2-min_me4uik.png" alt="carousel 1"/>
            <div class="slide-intro">
            <div class="container"><div class="row"><div class="span12">
            <div class="blog-date hidden-xs"><p class="day">26</p><p class="monthyear">FEB 2014</p></div>
            <div class="slide-excerpt">
            <h4><span>Vertec</span> fits in Your Every Needs!</h4>
            <p class="hidden-xs">Printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, the when an unknown printer took a galley of type and scrambled it to make a type specimen book vestibulum ut quam. Suspendisse interdum ipsum ornare porttitor porttitor...<a href="#">Read More</a></p>
            </div>
            <div class="pull-left"><p class="blog-meta hidden-xs">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a> | Comments: <a href="#">15</a></p></div>
            </div></div></div>
            </div>      
        </div>
        <div class="slide">
          <img src="content/slider3.jpg" alt="carousel 1"/>
            <div class="slide-intro">
            <div class="container"><div class="row"><div class="span12">
            <div class="blog-date hidden-xs"><p class="day">26</p><p class="monthyear">FEB 2014</p></div> 
            <div class="slide-excerpt">       
            <h4>Many More <span>Awesome</span> Features Included</h4>
            <p class="hidden-xs">Printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, the when an unknown printer took a galley of type and scrambled it to make a type specimen book vestibulum ut quam. Suspendisse interdum ipsum ornare porttitor porttitor...<a href="#">Read More</a></p>
            </div>
            <div class="pull-left"><p class="blog-meta hidden-xs">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a> | Comments: <a href="#">15</a></p></div>
            </div></div></div>
            </div>  
        </div>
      </div>
        <div class="clearfix"></div>
          <div class="nextprev">
                    <a class="prev" href="#"><div class="slidebox"><i class="fa fa-angle-left"></i></div></a>
                    <a class="next" href="#"><div class="slidebox"><i class="fa fa-angle-right"></i></div></a>
          </div>
    </div>
       <div class="clearfix"></div>


   <div class="blogCategory">
       <ul>
           <!--Para que se muestren los colores en active debe tener el href con el slug-->
           <a href="#blogBox1"><li class="slug-blogBox1 active">TODOS</li></a>
           <a href="#poleras"><li class="slug-poleras">POLERAS Y POLERONES</li></a>
           <a href="#industriales"><li class="slug-industriales">INDUSTRIALES</li></a>
           <a href="#tazones"><li class="slug-tazones">VASOS Y TAZONES</li></a>
           <a href="#bolsas"><li class="slug-bolsas">BOLSAS Y MOCHILAS</li></a>
           <a href="#cajas"><li class="slug-cajas">CAJAS</li></a>
           <a href="#gorros"><li class="slug-gorros">GORROS Y ACCESORIOS</li></a>
           <a href="#deportivos"><li class="slug-deportivos">DEPORTIVOS</li></a>
           <a href="#cocina"><li class="slug-cocina">COCINA</li></a>
           <a href="#otros"><li class="slug-otros">OTROS</li></a>
       </ul>
   </div>
   <div class="clearfix"></div>


   <!--Listado de productos-->
   <div class="blogContainer animated fadeInRightBig">
       <div class="blogSizer"></div>


      @foreach ($productos as $producto)
         <div class="blogBox1 {{$producto->categoria}}">
            <div class="box1Thumb"><img src="{{$producto->path}}" alt="simple post">
            <span class="overthumb"></span>
            <div class="carousel-icon">
               <a href="https://api.whatsapp.com/send?phone=+56921775293&text=Hola%20SerigrafiaSur%20Consulto%20por:" class="postlink">
               Consulta por este producto <i class="bi bi-whatsapp"></i>
            </a>
            </div></div>
            <h3>{{$producto->titulo}}</h3>
      </div>
      @endforeach
       
   </div>


</section>  


@endsection


