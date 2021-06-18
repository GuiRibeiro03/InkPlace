<?php
include_once("includes/body.inc.php");
top(ONDE);

$con=mysqli_connect(HOST,USER,PASS,DATABASE);
?>
    <section id="hero1" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 style="color: black; font-size: 60px!important;">Onde nos encontramos </h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" >


                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4" style="width: 90%; text-align: center">
                            <i class="bx bx-map" style="color:orange;"></i>
                            <h3>Endereço</h3>
                            <p style="font-size: 18px; "> Estrada de Leiria, 206
                                Edificio Embra Park 1º G,
                                Marinha Grande,  2430-527

                                 </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope" style="color:orange;"></i>
                            <h3>Email</h3>
                            <p style="font-size: 18px; ">inkplace@gmail.pt</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call" style="color:orange;"></i>
                            <h3>Contacta-nos</h3>
                            <p style="font-size: 18px">244560392 </p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24537.42761601768!2d-8.935001292739342!3d39.75810158459847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd220c266e9ba689%3A0x67757806ff88bb3!2sInk%20Place%2C%20Lda.!5e0!3m2!1spt-PT!2spt!4v1622539695907!5m2!1spt-PT!2spt"
                                width="540" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome"
                                           data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                    <div class="validate"></div>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                           data-rule="email" data-msg="Please enter a valid email"/>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Assunto" data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject"/>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Carregando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">O seu email foi enviado. Obrigado!</div>
                            </div>
                            <div class="text-center">
                                <button  type="submit">Enviar email</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

<?php
bot();
?>