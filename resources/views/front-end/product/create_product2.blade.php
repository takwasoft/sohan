
<!DOCTYPE HTML>
<head>
<title>create product</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="{{asset('/')}}front-end/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/')}}front-end/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('/')}}front-end/css/owl.carousel.css">
	<script src="{{asset('/')}}front-end/js/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="{{asset('/')}}front-end/css/megamenu.css">
    <link rel="stylesheet" href="{{asset('/')}}front-end/css/ionicons.min.css">

	<link href="{{asset('/')}}front-end/css/style.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('/')}}front-end/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="{{asset('/')}}front-end/js/easing.js"></script>
	<script src="{{asset('/')}}front-end/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<link href="{{asset('/')}}front-end/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{asset('/')}}front-end/css/global.css">

</head>

<body>

<header>
	<nav class="navbar navbar-tmiweb">
  <div class="container">
    <div class="col-sm-3 col-xs-12">
        <a href="{{route('/')}}"><img alt="Brand" src="{{asset('/')}}front-end/images/logo.jpg" width="90%" ></a>
    </div>
	<div class="col-sm-6 col-xs-12">
	<div class="progress1">
        <li class="active">Category</li>
        <li class="active">Place</li>
        <li>Product</li>
        <li>Payment</li>
        <li>Success</li>
    </div>
	</div>
	<div class="col-sm-3 col-xs-12">
	<p class="navbar-text">
	<span><i class="fa fa-phone fa-3x" aria-hidden="true"></i></span>
		Need Help? Call us!<br /> <a href="#" class="navbar-link">+8801860-130003</a>
	</p>
	</div>
  </div>
</nav>
</header>
<main>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group categories-list megamenu">
				<ul>
					<a class="list-group-item active">
						<i class="fa fa-bars" aria-hidden="true"></i>Division
					</a>
                <li><a href="#" class="list-group-item megamenu-caret">
                    Dhaka</a>

                        <ul style='background-color:#fff;border:none;display:block' class='sub-menu1'>
                            <li><a href="#"  class="list-group-item active">District</a>
                                <ul>
                                    <li><a class="list-group-item megamenu-caret" href="#"> 	Dhaka</a></li>
                                    <li><a href="#" class="list-group-item megamenu-caret">Ghazipur</a>
                                    
                                        <ul class='sub-menu2' style="background-color:#fff;border:none;display:block">
                                            <li><a href="#"  class="list-group-item active">Sub-District</a>
                                                <ul>
                                                    <li><a class="list-group-item megamenu-caret" href="{{route('create_product3')}}"> Gazipur Sadar Upazila</a></li>
                                                    <li><a href="#" class="list-group-item megamenu-caret"> Kaliakair Upazila</a></li>
                                                    <li><a href="#" class="list-group-item megamenu-caret"> Kapasia Upazila</a></li>
                                                    <li><a href="#" class="list-group-item megamenu-caret"> Sreepur Upazila</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    
                                    </li>
                                    <li><a href="#" class="list-group-item megamenu-caret">Kishoreganj</a></li>
                                    <li><a href="#" class="list-group-item megamenu-caret">Manikganj</a></li>
                                </ul>
                            </li>
                        </ul>

				</li>
				<li><a href="#" class="list-group-item megamenu-caret">
                    Chittagong</a>

					<ul style='background-color:#fff;border:none;' class='sub-menu1'>
                        <li><a href="#"  class="list-group-item active">Sub-Category</a>
                            <ul>
                                <li><a class="list-group-item megamenu-caret" href="#"> piash shirt</a></li>
                                <li><a href="#" class="list-group-item megamenu-caret"> piash pant</a>
                                
                                    <ul class='sub-menu2' style="background-color:#fff;border:none;">
                                        <li><a href="#"  class="list-group-item active">Sub-Category</a>
                                            <ul>
                                                <li><a class="list-group-item megamenu-caret" href="#"> piash shirt</a></li>
                                                <li><a href="#" class="list-group-item megamenu-caret"> piash pant</a></li>
                                                <li><a href="#" class="list-group-item megamenu-caret"> piash t-shirt</a></li>
                                                <li><a href="#" class="list-group-item megamenu-caret"> piash shirt</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                
                                </li>
                                <li><a href="#" class="list-group-item megamenu-caret"> piash t-shirt</a></li>
                                <li><a href="#" class="list-group-item megamenu-caret"> piash shirt</a></li>
                            </ul>
                        </li>
                    </ul>
				</li>

                <li><a href="#" class="list-group-item">
                    </i>Barisal</a>
				</li>

                <li><a href="#" class="list-group-item">
                   Khulna</a>
				</li>

                <li><a href="#" class="list-group-item">
                    Mymensingh</a>
				</li>

                <li><a href="#" class="list-group-item">
                    Rajshahi</a>
				</li>

                <li><a class="list-group-item megamenu-caret" href="#" class="list-group-item">
                    Rangpur</a>

                    <ul style='background-color:#fff;border:none;' class='sub-menu1'>
                        <li><a href="#"  class="list-group-item active">Category</a>
                            <ul>
                                <li><a class="list-group-item megamenu-caret" href="#">bangladeshi shirt</a></li>
                                <li><a href="#" class="list-group-item megamenu-caret">bangladeshi pant</a></li>
                                <li><a href="#" class="list-group-item megamenu-caret">bangladeshi t-shirt 55</a>
                                    
                                    <ul class='sub-menu2' style="background-color:#fff;border:none;">
                                        <li><a href="#"  class="list-group-item active">Sub-Category</a>
                                            <ul>
                                                <li><a class="list-group-item megamenu-caret" href="#"> piash shirt</a></li>
                                                <li><a href="#" class="list-group-item megamenu-caret"> piash pant</a></li>
                                                <li><a href="#" class="list-group-item megamenu-caret"> piash t-shirt</a></li>
                                                <li><a href="#" class="list-group-item megamenu-caret"> piash shirt</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                
                                </li>
                                <li><a href="#" class="list-group-item megamenu-caret">bangladeshi shirt</a></li>
                            </ul>
                        </li>
                    </ul>
				</li>

                <li><a href="#" class="list-group-item">
                    Sylhet</a>
				</li>

				</ul>
            </div>
        </div> <!-- end mega menu area  --->
    </div>
</div>


</main>


<div class="container">
	<div class="col-xs-12 create-product-controls">
		<a href="{{route('create_product2')}}"><button type="button" class="btn btn-my pull-right">Next</button></a>
	</div>
</div>



<a href="#" id="back-to-top" title="Back to top">
	<img src="{{asset('/')}}front-end/images/arrow_up.png" alt="" />
</a>


		<!-- bootstrap js -->
        <script src="{{asset('/')}}front-end/js/bootstrap.js"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('/')}}front-end/js/owl.carousel.min.js"></script>
		<!-- main js -->
        <script src="{{asset('/')}}front-end/js/main.js"></script>
		<!-- megamenu js -->
		<script src="{{asset('/')}}front-end/js/megamenu.js"></script>

</body>
</html>
