<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SerigrafiaSur</title>
    <meta name="keywords" content="Serigrafia, Sur, Chile, Estampados, Pymes, Curico, Estampados , Bordados" />
    <meta name="description" content="Ropa Personalizada y Estampada para Pymes y pequeños negocios">
    <meta name="author" content="Cristian Nazareno Gonzalez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/icons.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">




    <!--Boostrap iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  </head>
  <body class="blog">


    <!-- Cliengo installation code for ventas@serigrafiasur.cl <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/61414edcce9a3a002a7864f6/61414edfce9a3a002a7864f9.js?platform=dashboard'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>-->

    <!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "106954788405239");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!--Logo de Inicio Carga-->
    <div id="qLoverlay"><div class="loadLogo"><img src="img/logo.png" alt="Serigrafia Sur Chile - Estampados vinilo ropa personalizada "></div><div class="spinner"></div></div>
    <!-------------------------->
    <div id="vertec-layout">
      <div class="mobileNav">
        <div class="logo">
          <!--Logo-->
          <a href="{{route('productos')}}"><img class="mobileImg" src="img/logo.png" alt="Serigrafia Sur Chile - Estampados vinilo ropa personalizada "></a>
        </div>
        <div class="mobileClick">
          <!--Icono de menu-->
          <i class="bi bi-list"></i>
        </div>
      </div>


      <div class="siteWrapper">
        <!--Flecha para esconder sidebar o header-->
        <div class="hideHeader"><i class="bi bi-caret-left-fill"></i></div>
        <!--------------------------------->
        <div class="header header1 animated fadeIn">
          <header class="mainHeader">
            <div class="closeMobile visible-xs visible-sm">
              <!--Icono de esconder menu movil-->
              <i class="bi bi-arrow-bar-left"></i>
            </div>
            <div class="logo visible-md visible-lg">
              <a href="{{route('productos')}}"><img src="img/logo.png" alt="vertec"></a>
            </div>
            <nav class="mainNav">
              <div id="dl-menu" class="dl-menuwrapper">
              <button class="dl-trigger">Open Menu</button>
              <ul class="dl-menu dl-menuopen">
                <li>
                  <a href="{{route('productos')}}">PRODUCTOS</a>
                </li>
                  <li>
                  <a href="{{route('acerca')}}">ACERCA DE NOSOTROS</a>
                </li>
                <li>
                  <a href="{{route('galeria')}}">GALERIA</a>
                </li>
                <li>
                  <a href="{{route('contacto')}}">DEJANOS UN MENSAJE</a>
                </li>
                <li>
                  <a href="{{route('catalogo')}}" target="_blank">DESCARGAR CATÁLOGO PDF</a>
                </li>
              </ul>
              </div><!-- /dl-menuwrapper -->
            </nav>
          </header>
          <aside class="mainSidebar">
            <div class="navigation-social">
              <h3>ESTAMOS EN LAS REDES</h3>
              <div class="navigation-social-icons"><a href="#" target="_blank"><i class="bi bi-facebook"></i></a><p></p></div>
              <div class="navigation-social-icons"><a href="https://www.instagram.com/serigrafiasur/" target="_blank"><i class="bi bi-instagram"></i></a><p></p></div>
              <div class="navigation-social-icons"><a href="https://wa.me/+56921775293" target="_blank"><i class="bi bi-whatsapp"></i></a><p></p></div>
            </div>
            <div class="navigation-copyright">
              <p>SerigrafiaSur SPA 2021</p>
            </div>

          </aside>
        </div>

        @yield('content')



      </div>
    </div>


    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.queryloader2.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.nicescroll.min.js" ></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>



  </body>
</html>
