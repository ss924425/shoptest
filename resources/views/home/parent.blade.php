<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="{{ asset('homes/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ asset('homes/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="{{ asset('homes/css/style4.css') }}" rel="stylesheet" type="text/css" media="all" /> 
<link href="{{ asset('homes/css/form.css') }}" rel="stylesheet" type="text/css" media="all" /> 

       



<!--//theme-style-->
<script src="{{ asset('homes/js/jquery.min.js') }}"></script>
<!--- start-rate---->
<script src="{{ asset('homes/js/jstarbox.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('homes/css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                    starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                    } 
                })
            });
        });
        </script>

<!---//End-rate---->
</head>
<body>

<!--header-->
<div class="header">
<div class="container">
        <div class="head">
            <div class=" logo">
                <a href="{{url('/')}}"><img src="{{ asset('homes/images/logo.png') }}" alt=""></a> 
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
        <div class="col-sm-5 col-md-offset-2  header-login">
                    <ul >
                        <li><a href="{{url('login')}}">登录</a></li>
                        <li><a href="{{url('register')}}">注册</a></li>
                        <li><a href="{{url('contact')}}">商家入驻</a></li>
                    </ul>
                </div>
                
            <div class="col-sm-5 header-social">        
                    <ul >
                        <li><a href="#"><i></i></a></li>
                        <li><a href="#"><i class="ic1"></i></a></li>
                        <li><a href="#"><i class="ic2"></i></a></li>
                        <li><a href="#"><i class="ic3"></i></a></li>
                        <li><a href="#"><i class="ic4"></i></a></li>
                    </ul>
                    
            </div>
                <div class="clearfix"> </div>
        </div>
        </div>
        
        <div class="container">
        
            <div class="head-top">
            
         <div class="col-sm-8 col-md-offset-2 h_menu4">
                <nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="{{url('/')}}">Home</a></li>
            
            <li class="dropdown mega-dropdown active">
                <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>              
                <div class="dropdown-menu ">
                    <div class="menu-top">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu1</h4>
                                    <ul>
                                        <li><a href="{{url('product')}}">Accessories</a></li>
                                        <li><a href="{{url('product')}}">Bags</a></li>
                                        <li><a href="{{url('product')}}">Caps & Hats</a></li>
                                        <li><a href="{{url('product')}}">Hoodies & Sweatshirts</a></li>
                                        
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu2</h4>
                                <ul>
                                        <li><a href="{{url('product')}}">Jackets & Coats</a></li>
                                        <li><a href="{{url('product')}}">Jeans</a></li>
                                        <li><a href="{{url('product')}}">Jewellery</a></li>
                                        <li><a href="{{url('product')}}">Jumpers & Cardigans</a></li>
                                        <li><a href="{{url('product')}}">Leather Jackets</a></li>
                                        <li><a href="{{url('product')}}">Long Sleeve T-Shirts</a></li>
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu3</h4>
                                    <ul>
                                        <li><a href="{{url('product')}}">Shirts</a></li>
                                        <li><a href="{{url('product')}}">Shoes, Boots & Trainers</a></li>
                                        <li><a href="{{url('product')}}">Sunglasses</a></li>
                                        <li><a href="{{url('product')}}">Sweatpants</a></li>
                                        <li><a href="{{url('product')}}">Swimwear</a></li>
                                        <li><a href="{{url('product')}}">Trousers & Chinos</a></li>
                                        
                                    </ul>   
                                
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu4</h4>
                                <ul>
                                    <li><a href="{{url('product')}}">T-Shirts</a></li>
                                    <li><a href="{{url('product')}}">Underwear & Socks</a></li>
                                    <li><a href="{{url('product')}}">Vests</a></li>
                                    <li><a href="{{url('product')}}">Jackets & Coats</a></li>
                                    <li><a href="{{url('product')}}">Jeans</a></li>
                                    <li><a href="{{url('product')}}">Jewellery</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1 col5">
                        <img src="{{asset('homes/images/me.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>                  
                </div>              
            </li>
            <li class="dropdown mega-dropdown active">
                <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>                
                <div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu1</h4>
                                    <ul>
                                        <li><a href="{{url('product')}}">Accessories</a></li>
                                        <li><a href="{{url('product')}}">Bags</a></li>
                                        <li><a href="{{url('product')}}">Caps & Hats</a></li>
                                        <li><a href="{{url('product')}}">Hoodies & Sweatshirts</a></li>
                                        
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu2</h4>
                                <ul>
                                        <li><a href="{{url('product')}}">Jackets & Coats</a></li>
                                        <li><a href="{{url('product')}}">Jeans</a></li>
                                        <li><a href="{{url('product')}}">Jewellery</a></li>
                                        <li><a href="{{url('product')}}">Jumpers & Cardigans</a></li>
                                        <li><a href="{{url('product')}}">Leather Jackets</a></li>
                                        <li><a href="{{url('product')}}">Long Sleeve T-Shirts</a></li>
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu3</h4>
                                
<ul>
                                        <li><a href="{{url('product')}}">Shirts</a></li>
                                        <li><a href="{{url('product')}}">Shoes, Boots & Trainers</a></li>
                                        <li><a href="{{url('product')}}">Sunglasses</a></li>
                                        <li><a href="{{url('product')}}">Sweatpants</a></li>
                                        <li><a href="{{url('product')}}">Swimwear</a></li>
                                        <li><a href="{{url('product')}}">Trousers & Chinos</a></li>
                                        
                                    </ul>   
                                
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu4</h4>
                                <ul>
                                    <li><a href="{{url('product')}}">T-Shirts</a></li>
                                    <li><a href="{{url('product')}}">Underwear & Socks</a></li>
                                    <li><a href="{{url('product')}}">Vests</a></li>
                                    <li><a href="{{url('product')}}">Jackets & Coats</a></li>
                                    <li><a href="{{url('product')}}">Jeans</a></li>
                                    <li><a href="{{url('product')}}">Jewellery</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1 col5">
                        <img src="{{asset('homes/images/me1.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>                  
                </div>              
            </li>
            <li><a class="color3" href="{{url('product')}}">Sale</a></li>
            <li><a class="color4" href="404.html">About</a></li>
            <li><a class="color5" href="typo.html">Short Codes</a></li>
            <li ><a class="color6" href="contact.html">Contact</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
            </div>
            <div class="col-sm-2 search-right">
                <ul class="heart">
                <li>
                <a href="wishlist.html" >
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                </a></li>
                <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
                    </ul>
                    <div class="cart box_1">
                        <a href="{{url('cart')}}">
                        <h3> <div class="total">
                            <span class="simpleCart_total"></span></div>
                            <img src="{{ asset('homes/images/cart.png') }}" alt=""/></h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">购物车</a></p>

                    </div>
                    <div class="clearfix"> </div>
                    
                        <!----->

                        <!---pop-up-box---->                      
            <link href="{{ asset('homes/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all"/>
            <script src="{{ asset('homes/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                    <div class="login-search">
                        <input type="submit" value="">
                        <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">       
                    </div>
                    <p>Shopin</p>
                </div>              
            </div>
         <script>
            $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
            });
                                                                                        
            });
        </script>       
                        <!-- -->
            </div>
            <div class="clearfix"></div>
        </div>  
    </div>  
</div>

<!-- banner -->

@yield('content')

    <!--//footer-->
    <div class="footer">
    <div class="footer-middle">
                <div class="container">
                    <div class="col-md-3 footer-middle-in">
                        <a href="index.html"><img src="{{ asset('homes/images/log.png') }}" alt=""></a>
                        <p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
                    </div>
                    
                    <div class="col-md-3 footer-middle-in">
                        <h6>Information</h6>
                        <ul class=" in">
                            <li><a href="404.html">About</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="contact.html">Site Map</a></li>
                        </ul>
                        <ul class="in in1">
                            <li><a href="#">Order History</a></li>
                            <li><a href="wishlist.html">Wish List</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 footer-middle-in">
                        <h6>Tags</h6>
                        <ul class="tag-in">
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Sed</a></li>
                            <li><a href="#">Ipsum</a></li>
                            <li><a href="#">Contrary</a></li>
                            <li><a href="#">Chunk</a></li>
                            <li><a href="#">Amet</a></li>
                            <li><a href="#">Omnis</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-middle-in">
                        <h6>Newsletter</h6>
                        <span>Sign up for News Letter</span>
                            <form>
                                <input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
                                <input type="submit" value="Subscribe"> 
                            </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <ul class="footer-bottom-top">
                        <li><a href="#"><img src="{{ asset('homes/images/f1.png') }}" class="img-responsive" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('homes/images/f2.png') }}" class="img-responsive" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('homes/images/f3.png') }}" class="img-responsive" alt=""></a></li>
                    </ul>
                    <p class="footer-class">Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.css') }}moban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.css') }}moban.com/" title="网页模板" target="_blank">网页模板</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('homes/js/imagezoom.js') }}"></script>

<script src="{{ asset('homes/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('homes/js/simpleCart.min.js') }}"> </script>
<!-- slide -->
<script src="{{ asset('homes/js/bootstrap.min.js') }}"></script>

<!--light-box-files -->
        <script src="{{ asset('homes/js/jquery.chocolat.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('homes/css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="{{ asset('homes/css/flexslider.css') }}" type="text/css" media="screen" charset="utf-8">

        <!--light-box-files -->
        <script type="text/javascript" charset="utf-8">
        $(function() {
            $('a.picture').Chocolat();
        });
        </script>
        <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
          $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
          });
        });
        </script>


</body>
</html>