<div style="font-family: Verdana, Geneva, Tahoma, sans-serif">
  <h1 style="text-align: center">Tienes un mensaje!</h1>
  <p style="text-transform: capitalize"><strong>Mensaje: </strong>{{$msg}}</p>
  <hr>
  <h2>Datos de contacto:</h2>
  <!--Correo-->
  <p>
      <strong>Correo: </strong>
      <!---Si dejo correo lo mostramos o si no no poh!-->
      @php
          if($email != '' || $email != NULL){
              echo '<a style="color: orange" href="mailto:'.$email.'">'.$email.'</a>
                  <span style="font-size: 12px; color: gray">Click en el correo para enviar mensaje directamente!</span>';
          }else {
              echo '<span>No dejo correo electrónico.</span>';
          }
      @endphp
  </p>
  <!--Whatsapp-->
  <p>
      <strong>Numero de telefono: </strong>
      <!---Si dejo telefono lo mostramos o si no no poh!-->
      @php
          if($email != '' || $email != NULL){
              echo '<a href="https://wa.me/+56'.$number.'}}" style="color: orange">+56'.$number.'</a>
              <span style="font-size: 12px; color: gray">Click en el correo para enviar Whatsapp directamente! (puede que no este disponible)!</span>';
          }else {
              echo '<span>No dejo correo numero.</span>';
          }
      @endphp


  </p>

  <hr>
  <p style="color: orange ; text-align: center">Recuerde que todo llega en el momento perfecto!</p>

</div>