@extends('app')

@section('content')

<section class="mainContent blogPage">
   <!--========================================================================================================-->
   <!--Caracteristicas de Servicios-->
   <div class="bg-color">
     <div class="container">
       <div class="row">
         <!-- Services-1 Box -->
         <div class="col-md-4">
           <a href="#"><div class="services-1 animated bounceIn">
             <div class="holder"><i class="bi bi-truck" style="font-size: 75px; line-height: 5px"></i></div>
             <h4>Envios a todo el País</h4>
             <p></p>
           </div></a>
         </div>
         <!-- Services-1 Box -->
         <div class="col-md-4">
           <a href="#"><div class=" services-1 animated bounceIn">
             <div class="holder"><i class="bi bi-stars"  style="font-size: 75px; line-height: 5px"></i></i></div>
             <h4>Ideas Creativas</h4>
             <p></p>
           </div></a>
         </div>
         <!-- Services-1 Box -->
         <div class="col-md-4">
           <a href="#"><div class="services-1 animated bounceIn">
             <div class="holder"><i class="bi bi-question-diamond-fill" style="font-size: 75px; line-height: 5px"></i></div>
             <h4>Soporte</h4>
             <p></p>
           </div></a>
         </div>
 
       </div>
     </div>
   </div>
   <!--========================================================================================================-->
 
 
 
   <div class="bg-color">
     <div class="container">
       <div class="row">
         <div class="column-border">
           <div class="col-md-12 animated fadeInRight">
 
             <h1 class="rowtitle">Bienvenido a <span>Serigrafia Sur</span> Chile</h1>
             <h2>Una solucion de personalizacion para la indumentaria de su empresa, banda o equipo.</h2>
             <br>
             <p>
               Somos un taller familiar orientado en plasmar un diseño sobre diversos productos o materiales . Nuestro enfoque es entregar un servicio de calidad y de alto nivel.
             </p>
             <br>
 
             <!--Menu colapsable-->
             <div class="panel-group" id="accordion">
 
               <!--Item-->
               <div class="panel panel-default">
                 <!--Cabeza del item-->
                 <div class="panel-heading">
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       ¿Que tipo de prendas trabajamos?
                     </a>
                   </h4>
                 </div>
                 <div id="collapseOne" class="panel-collapse collapse">
                   <div class="panel-body">
                     <p>Trabajamos diversas prendas personalizadas con el logo de su empresa, banda, grupo, equipo o simplemente ¡lo que usted desee!</p>
                     <ul>
                       <li>Mascarillas</li>
                       <li>Gorras</li>
                       <li>Ropa Corporativa</li>
                       <li>Poleras</li>
                       <li>Polerones</li>
                       <li>Cajas</li>
                       <li>Carpetas</li>
                       <li>Bolsas TNT</li>
                       <li>Bolsas Craft</li>
                       <li>Tazones</li>
                       <li>Vasos</li>
                       <li>Botellas</li>
                       <li>Cojines</li>
                     </ul>
                   </div>
                 </div>
               </div>
 
 
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                       ¿Donde Trabajamos?
                     </a>
                   </h4>
                 </div>
                 <div id="collapseTwo" class="panel-collapse collapse">
                   <div class="panel-body">
                     <p>Estamos presentes en el sur de Chile.</p>
                     <ul>
                       <li>Santiago</li>
                       <li>Rancagua</li>
                       <li>Curicó</li>
                       <li>Talca</li>
                       <li>Concepción</li>
                       <li>Los Ángeles</li>
                       <li>Temuco</li>
                       <li>Valdivia</li>
                       <li>Puerto Montt</li>
                       <li>Osorno</li>
                     </ul>
                   </div>
                 </div>
               </div>
 
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                       Consultas
                     </a>
                   </h4>
                 </div>
                 <div id="collapseThree" class="panel-collapse collapse in">
                   <div class="panel-body">
                   No te quedes con las dudas... puedes consultarnos a través de nuestro correo <a href="mailto:ventas@serigrafiasur.cl" target=”_blank>ventas@serigrafiasur.cl</a> , enviando un mensaje a nuestro facebook <a href="https://www.facebook.com/serigrafiasurchile" target=”_blank>Serigrafía Sur</a>, o simplemente enviando un mensaje de whatsapp al <a href="https://api.whatsapp.com/send?phone=+56921775293&text=Hola%20Serigraf%C3%ADa%20sur%20consulto%20por..." target=”_blank>+56-921775293.</a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 
 
 
 </section>
 
 
 

@endsection