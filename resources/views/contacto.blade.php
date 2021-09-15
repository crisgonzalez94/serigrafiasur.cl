@extends('app')

@section('content')

<section class="mainContent">
   <div class="bg-map">
 
     <!--Aca podemos mostrar un video o mapa-->
    <div class="row">
      <div class="container">
        <div class="col-md-12 animated fadeInDown">
          <iframe width="100%" height="420" src="https://www.youtube.com/embed/ojOIIMTaVKE" scrolling="no" marginheight="0" marginwidth="0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
 
 
   </div>
    <div class="row">
      <div class="container">
      <div class="contact-page-form">
 
 
       <div class="col-md-6 animated fadeInLeft">
         <h3 class="subTitle">DEJANOS TU <span>MENSAJE</span></h3>
         <p>Respondemos mensajes todos los dias, nos comunicaremos con usted lo antes posible, pero si desea una cotizacion automatica puede enviar una <a [routerLink]="['/presupuesto']">aquí</a></p>
         <div class="contact-form2">
 
           <!--Formulario de mensaje-->
           <form class="form-horizontal" role="form" #formContacto="ngForm" (ngSubmit)="onSubmit()">
 
             <div class="form-group">
               <label for="email" class="col-sm-4 control-label">Email (opcional)</label>
               <div class="col-sm-8">
                 <input type="email" class="form-control" id="email" name="email" #email="ngModel" [(ngModel)]="contacto.email">
               </div>
             </div>
 
             <div class="form-group">
               <label for="whatsapp" class="col-sm-4 control-label">WhatsApp (opcional)</label>
                 <div class="col-sm-8">
                   <input type="whatsapp" class="form-control" id="whatsapp" name="whatsapp" #whatsapp="ngModel" [(ngModel)]="contacto.whatsapp">
                 </div>
             </div>
 
             <div class="form-group">
               <label for="mensaje" class="col-sm-4 control-label">Mensaje</label>
               <div class="col-sm-8">
                 <textarea class="form-control" rows="5" id="mensaje" name="mensaje" #mensaje="ngModel" [(ngModel)]="contacto.mensaje">Deje su mensaje aquí</textarea>
               </div>
             </div>
 
             <div class="form-group">
               <div class="col-sm-12">
                 <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar mensaje</button>
               </div>
             </div>
 
 
           </form>
         </div>
 
        </div>
        </div>
 
 
        <div class="bg-contact-social">
         <div class="col-md-6 animated fadeInRight">
 
           <h3 class="subTitle" style="color: orange">MEDIOS DE <span>CONTACTO</span></h3>
           <div class="contact-info">
             <p><i class="bi bi-whatsapp"></i> +569 21775293</p>
             <p><i class="bi bi-envelope-fill"></i> ventas@serigrafiasur.cl</p>
             <p><i class="bi bi-instagram"></i> serigrafiasur</p>
             <p><i class="bi bi-facebook"></i> Serigrafia Sur</p>
           </div>
         </div>
        </div>
 
 
 
 
      </div>
      <div class="copyright-section">
       <div class="row">
         <div class="container">
           <div class="col-md-12">
             <p>SerigrafiaSur Chile SPA 2021</p>
           </div>
         </div>
       </div>
     </div>
    </div>
   </section>
 
@endsection