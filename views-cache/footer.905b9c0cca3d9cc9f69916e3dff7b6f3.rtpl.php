<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Footer Start -->

            <div class="footer padd">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Logo area -->
                                <div class="logo">
                                    <img class="img-responsive" src="/res/site/img/logo-sabor-e-saude-small.png" alt="" />
                                    <!-- Heading -->
                                    <h1>Sabor & Saúde</h1>
                                </div>
                                <!-- Paragraph -->
                                <p>Comida saudável.</p>
                                <hr />
                                <!-- Heading -->
                                <h6>Aceitamos</h6>
                                <!-- Images -->
                                <a href="#">
                                    <img class="payment img-responsive" src="/res/site/img/payment/mastercard.gif" alt="" />
                                </a>
                                <a href="#">
                                    <img class="payment img-responsive" src="/res/site/img/payment/visa.gif" alt="" />
                                </a>
                                <a href="#">
                                    <img class="payment img-responsive" src="/res/site/img/payment/hipercard.gif" alt="" />
                                </a>
                                <a href="#">
                                    <img class="payment img-responsive" src="/res/site/img/payment/sodexo.gif" alt="" />
                                </a>
                                <a href="#">
                                    <img class="payment img-responsive" src="/res/site/img/payment/alelo.gif" alt="" />
                                </a>
                            </div> <!--/ Footer widget end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Pratos famosos</h4>
                                <!-- Images -->
                                <?php $counter1=-1;  if( isset($famous_dishes) && ( is_array($famous_dishes) || $famous_dishes instanceof Traversable ) && sizeof($famous_dishes) ) foreach( $famous_dishes as $key1 => $value1 ){ $counter1++; ?>
                                    <a href="/product/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        <img class="dish img-responsive" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Prato" style="width: 66px; height: 66px;"/>
                                    </a>
                                <?php } ?>
                            </div> <!--/ Footer widget end -->
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Junte-se a nós</h4>
                                <!-- Paragraph -->
                                <p>Informe seu nome e seu e-mail e te enviaremos nossas novidades e promoções.</p>
                                <!-- Subscribe form -->
                                <form role="form" action="/feed">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Seu nome" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Seu e-mail" />
                                    </div>
                                    <button class="btn btn-danger" type="button">Enviar</button>
                                </form>
                            </div> <!--/ Footer widget end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Contato</h4>
                                <div class="contact-details">
                                    <!-- Address / Icon -->
                                    <i class="fa fa-map-marker br-red"></i> 
                                    <span>Edf Luciano Costa, 170, Loja B
                                        <br />Rua Dona Maria César, Recife - PE,<br /> 50.030-140
                                    </span>
                                    <div class="clearfix"></div>
                                    <!-- Contact Number / Icon -->
                                    <i class="fa fa-phone br-green"></i> 
                                    <span>+55 81 3224-1706</span>
                                    <div class="clearfix"></div>
                                    <!-- Email / Icon -->
                                    <i class="fa fa-envelope-o br-lblue"></i> 
                                    <span><a href="#">contato@temsaboresaude.com.br</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- Social media icon -->
                                <div class="social">
                                    <a href="https://www.facebook.com/saboresaudesaladadefrutas/" class="facebook" target="blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com.br/pontosaboresaude" class="instagram" target="blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div> <!--/ Footer widget end -->
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="footer-copyright">
                        <!-- Paragraph -->
                        <p>&copy; Copyright 2018 <a href="www.seemantica.com.br">Seemantica Softwares</a></p>
                    </div>
                </div>
            </div>
            
            <!-- Footer End -->
            
        </div><!-- / Wrapper End -->
        
        
        <!-- Scroll to top -->
        <span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
        
        <!-- Javascript files -->
        <!-- jQuery -->
        <script src="/res/site/js/jquery.js"></script>
        <!-- Bootstrap JS -->
        <script src="/res/site/js/bootstrap.min.js"></script>
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="/res/site/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="/res/site/js/jquery.themepunch.revolution.min.js"></script>
        <!-- FLEX SLIDER SCRIPTS  -->
        <script defer src="/res/site/js/jquery.flexslider-min.js"></script>
        <!-- Pretty Photo JS -->
        <script src="/res/site/js/jquery.prettyPhoto.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="/res/site/js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="/res/site/js/html5shiv.js"></script>
        <!-- Custom JS -->
        <script src="/res/site/js/custom.js"></script>
        <!-- JS code for this page -->
        <script>
            /* ******************************************** */
            /*  JS for SLIDER REVOLUTION  */
            /* ******************************************** */
            jQuery(document).ready(function() {
                   jQuery('.tp-banner').revolution(
                    {
                        delay:9000,
                        startheight:500,
                        
                        hideThumbs:10,
                        
                        navigationType:"bullet",    
                                                    
                        hideArrowsOnMobile:"on",
                        
                        touchenabled:"on",
                        onHoverStop:"on",
                        
                        navOffsetHorizontal:0,
                        navOffsetVertical:20,
                        
                        stopAtSlide:-1,
                        stopAfterLoops:-1,

                        shadow:0,
                        
                        fullWidth:"on",
                        fullScreen:"off"
                    });
            });

            /* ******************************************** */
            /*  JS for FlexSlider  */
            /* ******************************************** */
            
            $(window).load(function(){
                $('.flexslider-recent').flexslider({
                    animation:      "fade",
                    animationSpeed: 1000,
                    controlNav:     true,
                    directionNav:   false
                });
                $('.flexslider-testimonial').flexslider({
                    animation:      "fade",
                    slideshowSpeed: 5000,
                    animationSpeed: 1000,
                    controlNav:     true,
                    directionNav:   false
                });
            });
        
            /* Gallery */

            jQuery(".gallery-img-link").prettyPhoto({
               overlay_gallery: false, social_tools: false
            });
        
        </script>
    </body> 
</html>