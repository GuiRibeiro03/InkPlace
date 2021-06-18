<?php
include_once ("includes/body.inc.php");
top(SOBRE);

$con=mysqli_connect(HOST,USER,PASS,DATABASE);


?>
<section id="hero1" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1 style="color: black; font-size: 60px!important;">Sobre nós</h1>
    </div>
</section><!-- End Hero -->


<div style="width: 100%; text-align: center"> <img src="assets/img/ink.png" style="margin-left: 2%; "></div>
  <main id="container" style="text-align: center; width: 60%; margin-left: 20%">
      <?php
      $sql = "Select * from paginas
      inner join seccoes on seccaoId=paginaSeccaoId
      inner join sites on siteId =seccaoSiteId
      where siteNome='inkPlace' and seccaoNome='Sobre Nos'";
      $resultPg = mysqli_query($con, $sql);
      while ($dadosPg = mysqli_fetch_array($resultPg)){


      ?>
      <div class="clients" id="sobreNosTexto" style=" padding: 2% 2% 3% 2%; text-align: justify; font-size: 18px">
          <?php echo $dadosPg['paginaTexto'];?>
      </div>
      <?php
}
?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php

bot();
?>
