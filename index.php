<?php
include_once("includes/body.inc.php");
top(HOME);

$con=mysqli_connect(HOST,USER,PASS,DATABASE);

?>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 style="color: black;    ">Bem-vindo à <span
                        style="color: #e67817;text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; ">Ink</span>
                <span style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; ">Place</span>
            </h1>
            <h2 style="color: #292929">Distribuição e Serviços</h2>
        </div>

    </section><!-- End Hero -->

    <main id="main" style=" background-color: #FFFFFF;">
        <!-- Start Icon Box Area -->

        <div class="icon-box-area pt-70 pb-70" id="feature" style="padding-top:3%; background-color: #FFFFFF;">
            <div class="container">
                <div class="row">

<?php

$sql="Select * from paginas 
inner join seccoes on seccaoId=paginaSeccaoId
inner join sites on siteId =seccaoSiteId
where siteNome='inkplace' and seccaoNome='home'";
$resultPg=mysqli_query($con,$sql);
while($dadosPg=mysqli_fetch_array($resultPg)){

    ?>
                    <div class="col-lg-4">
                        <div class="single-icon-box icon-box-img-1">
                            <div class="icon-box-content">
                                <h6 class="iconbox-content-heading"><i class="fa fa-handshake"></i><?php echo $dadosPg['paginaNome']?>
                                </h6>
                                <div class="iconbox-content-body">
                                    <br>
                                    <p><?php echo $dadosPg['paginaTexto']?>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
    <?php
}
        ?>
                </div>
            </div>
        </div>
        <!-- End Icon Box Area -->
        <br>
        <br>
        <br>
        <!-- ======= Clients Section ======= -->
        <!--section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">
                <h2 style="color: #292929; font-weight: bold; font-size: 40px; text-align: center">Lojas associadas</h2>
                <br>
                <div class="row" id="LojasAssoc">

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://pc-farma.pt/"><img src="imagens/logoPC.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://lojadascompotas.pt/"><img src="assets/img/compota.png" class="img-fluid"
                                                                   alt=""></a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://colheitaselecionada.pt/"><img src="assets/img/construcao11.png"
                                                                       class="img-fluid" alt=""></a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://www.kastas.pt/"><img src="assets/img/kasta.png" class="img-fluid" alt=""></a>
                    </div>

                </div>

            </div>
        </section--><!-- End Clients Section -->

    </main><!-- End #main -->

<?php

bot();
?>