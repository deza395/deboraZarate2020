<?php include("partials/head.php"); ?>
    <!-- INICIO DEL NAVBAR -->

<?php include("partials/header.php"); ?>

    <!-- FIN DE PORTADA -->


    <!-- INICIO SOBRE MI  -->
<?php include("partials/sobreMi.php") ?>
    <!-- FIN SOBRE MI  -->



       <!-- SERVICIOS -->
<?php include("partials/servicios.php") ?>
     <!-- FIN DE SERVICIOS -->

    <!-- INICIO PORFOLIO  -->
<?php include("partials/portfolio.php") ?>
      <!-- FIN PORFOin -->

     <!-- INIIO CONTRACTO -->

<section class="contacto" id="contacto">

  <div id="particles-js"></div>
    <div class="form">
      <div class="title-contact"><h2>Contacto</h2></div>
      <div class="row">
         <div class=" col-11 contact">
           <?php
    if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

    <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

    <?php
    } else{
    ?>

            <form  class="formulario " action="envio-formulario.php" method="post" enctype="multipart/form-data">
               <div class="box1">
                 <input id="nombre" class="nombre  col-12 col-md-12 col-lg-3" type="text" placeholder="Nombre" name="nombre" required>

                 <input id="telefono" class="telefono col-12 col-md-12 col-lg-3" type="phone" placeholder="Telefono" name="telefono" >

                 <input id="email" class="email col-12 col-md-12 col-lg-3" type="email" placeholder="Email" name="email" required>
               </div>

                <div class="box2">
                  <textarea id="mensaje" class="mensaje col-12 col-md-12 col-lg-11" placeholder="Mensaje" name="mensaje" required></textarea>
                </div>

               <button id="enviar" class="btn-enviar" type="submit" name="action"> Enviar
                           <i class="far fa-paper-plane"></i>
               </button>
           </form>
         <?php } ?>
      </div>
    </div>
  </div>

          <section class="footer">
            <div class="container">
              <div class="content">
                <div class="social-links">
                    <img src="img/social/linkedin.png" alt="">
                </div>
                <div class="name"><h4>Debora Zarate -Todos los derechos reservados 2019</h4></div>
              </div>
            </div>
          </section>

</section>


<!-- FIN CONTACTO -->

</body>
<script src="js/particles.min.js"></script>
<script type="text/javascript" src="js/app.js"> </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script  src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script type="text/javascript">
   AOS.init({
      duration:2000,
   });
</script>
<script type="text/javascript">
$(window).on('scroll',function(){
  if($(window).scrollTop()){
    $('nav').addClass('black');
  }
  else{
    $('nav').removeClass('black');
  }
});
</script>
<script type="text/javascript">

$(document).ready(function(){
$(".nav-link").click(function () {
    $(".hamburger").click();
});
});



</script>

</html>
