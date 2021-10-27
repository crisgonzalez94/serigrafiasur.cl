@extends('app')

@section('content')
  
<section class="mainContent customPage">      
  <div class="container">
    <div class="row">
      <div class="col-md-12 animated fadeInDown">
      <div class="pageTitle"><h1 style="margin-left: 30px">NUESTRO <span style="color: orange;">CATÁLOGO</span></h1></div>
      <img src="content/about-us-image.jpg" align="right">

      <p>
        SerigrafiaSur es una empresa que provee indumentaria personalizada por mayor. Hemos trabajado con muchas empresas a lo largo del país.
      </p>

      <p>
        SerigrafiaSur También provee de productos a las empresas que necesitan de
        Indumentaria industrial. Tenemos una amplia gama de productos pensados para
        las industrias mineras, agrícolas, fabricas y talleres.
      </p>

      <p>
        SerigrafiaSur sabe la importancia de la identidad de cada comercio y es por eso que cuida meticulosamente cada trabajo desde el momento de la cotización, hasta el momento de los despachos que hacemos en todo el país.
      </p>

      <p>
        Puedes ver los productos en esta web o te dejamos nuestro catálogo para que siempre lo tengas, recuerda que actualizamos con nuevos productos constantemente.
      </p>

      <h2>Descargar catálogo de Indumentaria para Pymes</h2>

      <br>
      <a href="{{route('catalogo')}}" target="_blank" class="btn btn-primary btn-lg">Descargar Catálogo PDF</a>
      <br>
      <br>

      </div>
    </div>
    
</section>  

@endsection