<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Title here -->
        <title>Sabor & Saúde - Comida saudável</title>
        <!-- Description, Keywords and Author -->
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your,Keywords">
        <meta name="author" content="ResponsiveWebInc">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="/res/site/css/bootstrap.min.css" rel="stylesheet">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link href="/res/site/css/settings.css" rel="stylesheet">     
        <!-- FlexSlider Css -->
        <link rel="stylesheet" href="/res/site/css/flexslider.css" media="screen" />
        <!-- Portfolio CSS -->
        <link href="/res/site/css/prettyPhoto.css" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="/res/site/css/font-awesome.min.css" rel="stylesheet"> 
        <!-- Custom Less -->
        <link href="/res/site/css/less-style.css" rel="stylesheet">   
        <!-- CSS específico -->
        <link href="/res/site/css/sabor-e-saude.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/res/site/css/style.css" rel="stylesheet">
        <!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="#">
    </head>
    
    <body>
        
            
        <!-- Shopping cart Modal -->
        <div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Resumo do pedido</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Items table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Exception Reins Evocative</a></td>
                                    <td>2</td>
                                    <td>$200</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Taut Mayoress Alias Appendicitis</a></td>
                                    <td>1</td>
                                    <td>$190</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Sinter et Molests Perfectionist</a></td>
                                    <td>4</td>
                                    <td>$99</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>$489</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Continuar comprando</button>
                        <button type="button" class="btn btn-info">Finalizar pedido</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Model End -->
        
        <!-- Page Wrapper -->
        <div class="wrapper">
        
            <!-- Header Start -->
            
            <div class="header">
                <div class="container">
                    <!-- Header top area content -->
                    <div class="header-top">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- Header top left content contact -->
                                <div class="header-contact">
                                    <!-- Contact number -->
                                    <span>
                                        <i class="fa fa-phone red"></i> 81 3224-1706
                                        <i class="fa fa-whatsapp green"></i> 9.8845-1762
                                        <i class="fa fa-whatsapp green"></i> 9.9785-3201
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!-- Button Kart -->
                                <div class="btn-cart-md">
                                    <a class="cart-link" href="#">
                                        <!-- Image -->
                                        <img class="img-responsive foto-redonda" src="/res/site/img/male.png" alt="" />
                                        
                                        <!-- Heading -->
                                        <?php if( checkLogin(false) ){ ?>
                                                <h4>Olá, <?php echo getUserName(); ?></h4>
                                                <span>Minha conta</span>
                                            <div class="clearfix"></div>
                                        <?php }else{ ?>
                                                <h4>Olá, visitante</h4>
                                                <span>Faça login</span>
                                            <div class="clearfix"></div>
                                        <?php } ?>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <!-- Button Kart -->
                                <div class="btn-cart-md">
                                    <a class="cart-link" href="#">
                                        <!-- Image -->
                                        <img class="img-responsive" src="/res/site/img/cart.png" alt="" />
                                        <!-- Heading -->
                                        <h4>Meu carrinho</h4>
                                        <span><?php echo getCartNrQtd(); ?> itens <?php echo getCartVlSubTotal(); ?></span>
                                        <div class="clearfix"></div>
                                    </a>
                                    <ul class="cart-dropdown" role="menu">
                                        <li>
                                            <!-- Cart items for shopping list -->
                                            <div class="cart-item">
                                                <!-- Item remove icon -->
                                                <a href="#"><i class="fa fa-times"></i></a>
                                                <!-- Image -->
                                                <img class="img-responsive img-rounded" src="/res/site/img/nav-menu/nav1.jpg" alt="" />
                                                <!-- Title for purchase item -->
                                                <span class="cart-title"><a href="#">Exception Reins Evocative</a></span>
                                                <!-- Cart item price -->
                                                <span class="cart-price pull-right red">$200/-</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Cart items for shopping list -->
                                            <div class="cart-item">
                                                <!-- Item remove icon -->
                                                <a href="#"><i class="fa fa-times"></i></a>
                                                <!-- Image -->
                                                <img class="img-responsive img-rounded" src="/res/site/img/nav-menu/nav2.jpg" alt="" />
                                                <!-- Title for purchase item -->
                                                <span class="cart-title"><a href="#">Taut Mayoress Alias Appendicitis</a></span>
                                                <!-- Cart item price -->
                                                <span class="cart-price pull-right red">$190/-</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Cart items for shopping list -->
                                            <div class="cart-item">
                                                <!-- Item remove icon -->
                                                <a href="#"><i class="fa fa-times"></i></a>
                                                <!-- Image -->
                                                <img class="img-responsive img-rounded" src="/res/site/img/nav-menu/nav3.jpg" alt="" />
                                                <!-- Title for purchase item -->
                                                <span class="cart-title"><a href="#">Sinter et Molests Perfectionist</a></span>
                                                <!-- Cart item price -->
                                                <span class="cart-price pull-right red">$99/-</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Cart items for shopping list -->
                                            <div class="cart-item">
                                                <a class="btn btn-danger" data-toggle="modal" href="#shoppingcart1">Resumo do pedido</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <!-- Link -->
                            <a href="index.html">
                                <!-- Logo area -->
                                <div class="logo">
                                    <img class="img-responsive" src="/res/site/img/logo-sabor-e-saude-small.png" alt="" />
                                    <!-- Heading -->
                                    <h1>Sabor & Saúde</h1>
                                    <!-- Paragraph -->
                                    <p>Comida saudável.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <!-- Navigation -->
                            <nav class="navbar navbar-default navbar-right" role="navigation">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li><a href="index.html"><img src="/res/site/img/nav-menu/nav1.jpg" class="img-responsive" alt="" /> Início</a></li>
                                            <li class="dropdown hidden-xs">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/res/site/img/nav-menu/nav2.jpg" class="img-responsive" alt="" /> Menu <b class="caret"></b></a>
                                                <ul class="dropdown-menu dropdown-md">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <!-- Menu Item -->
                                                                <div class="menu-item">
                                                                    <!-- Heading -->
                                                                    <h3>Vegetarian</h3>
                                                                    <!-- Image -->
                                                                    <img src="/res/site/img/dish/dish1.jpg" class="img-responsive" alt="" />
                                                                    <!-- Paragraph -->
                                                                    <p>Sea nut perspicacity under omni piste natures mirror of there with consequent.</p>
                                                                    <!-- Button -->
                                                                    <a href="menu.html" class="btn btn-danger btn-xs">View Menu</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <!-- Menu Item -->
                                                                <div class="menu-item">
                                                                    <!-- Heading -->
                                                                    <h3>Non-Vegetarian</h3>
                                                                    <!-- Image -->
                                                                    <img src="/res/site/img/dish/dish2.jpg" class="img-responsive" alt="" />
                                                                    <!-- Paragraph -->
                                                                    <p>Sea nut perspicacity under omni piste natures mirror as precode consequent.</p>
                                                                    <!-- Button -->
                                                                    <a href="menu.html" class="btn btn-danger btn-xs">View Menu</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <!-- Menu Item -->
                                                                <div class="menu-item">
                                                                    <!-- Heading -->
                                                                    <h3>Special Menu</h3>
                                                                    <!-- Image -->
                                                                    <img src="/res/site/img/dish/dish3.jpg" class="img-responsive" alt="" />
                                                                    <!-- Paragraph -->
                                                                    <p>Sea nut perspicacity under omni piste natures mirror consequent.</p>
                                                                    <!-- Button -->
                                                                    <a href="menu.html" class="btn btn-danger btn-xs">View Menu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown visible-xs">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Vegetarian</a></li>
                                                    <li><a href="menu.html">Non Vegetarian</a></li>
                                                    <li><a href="menu.html">Special Menu</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="gallery.html"><img src="/res/site/img/nav-menu/nav3.jpg" class="img-responsive" alt="" /> Galeria</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/res/site/img/nav-menu/nav4.jpg" class="img-responsive" alt="" /> Shop <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="items.html">Shopping</a></li>
                                                    <li><a href="item-single.html">Order Now</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="reserve-seats.html">Reservation</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/res/site/img/nav-menu/nav5.jpg" class="img-responsive" alt="" /> Pages <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="error.html">404 Error</a></li>
                                                    <li><a href="0-base.html">Blank Page</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-single.html">Blog Single</a></li>
                                                    <li><a href="components.html">Components</a></li>
                                                    <li><a href="general.html">General</a></li>
                                                    <li><a href="nutrition-info.html">Nutrition Info</a></li>
                                                    <li><a href="recipe.html">Recipes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="aboutus.html"><img src="/res/site/img/nav-menu/nav6.jpg" class="img-responsive" alt="" /> Sobre nós</a></li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                </div> <!-- / .container -->
            </div>

            <!-- Header End -->
