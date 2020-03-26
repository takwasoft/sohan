
<!DOCTYPE HTML>
<head>
<title>create product1</title>
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
        <li class="active">Product</li>
        <li class="active">Payment</li>
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
	<div class="col-xs-12 create-product-controls">
		<button type="button" class="btn btn-my">Back</button>
		<button type="button" class="btn btn-my pull-right">Next</button>
	</div>
</div>


<div class="container">
	<div class="row">
			<div class="col-md-4">
				<h4>Payments</h4>
				<div class="payments text-center">
				<div class="checkbox">
					<img src="{{asset('/')}}front-end/images/payment/bkash.png" alt="" width="28.33%"/>
					<label>
					  <input type="checkbox">
					</label>
					<img src="{{asset('/')}}front-end/images/payment/cash.png" alt="" width="28.33%"/>
					<label>
					  <input type="checkbox">
					</label>
					<img src="{{asset('/')}}front-end/images/payment/U-Cash-icon.png" alt="" width="28.33%"/>
					<label>
					  <input type="checkbox">
					</label>
				 </div>
					
					
				</div>
			</div>
			<div class="col-md-8">
				<h4>Disclaimer</h4>
				<div class="return-policy">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec volutpat erat. Suspendisse potenti. 
				Nullam nec lacus pharetra, fringilla ex id, vulputate erat. Cras et magna laoreet diam vulputate pellentesque
				vel sit amet lorem. Etiam id blandit libero. Etiam pellentesque faucibus ultricies. In vitae imperdiet orci
				. Aenean dignissim est nulla, at vehicula purus pharetra eget. Aliquam vitae metus volutpat, dapibus ex vitae,
				elementum enim. Nam iaculis dui non purus tincidunt mollis. Sed cursus malesuada viverra.
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec volutpat erat. Suspendisse potenti. 
				Nullam nec lacus pharetra, fringilla ex id, vulputate erat. Cras et magna laoreet diam vulputate pellentesque
				vel sit amet lorem. Etiam id blandit libero. Etiam pellentesque faucibus ultricies. In vitae imperdiet orci
				. Aenean dignissim est nulla, at vehicula purus pharetra eget. Aliquam vitae metus volutpat, dapibus ex vitae,
				elementum enim. Nam iaculis dui non purus tincidunt mollis.
				</p>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="row ">
		<div class="col-md-12 ">
			<h4>Product Quantity & Price</h4>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-12 ">
			<div class="create-product-details">
				<h4>Shipping Methods *</h4>
				<p>First select your Product Location</p>
				<br>
				<h4>Shipping Cost *</h4>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Option one is this and that&mdash;be sure to include why it's great
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
					Option one is this and that&mdash;be sure to include why it's great
				  </label>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row ">
		<div class="col-md-12 ">
			<h4>Return Policy</h4>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-12 ">
			<div class="create-product-details">
				
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked>
					 No Return Policy
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked>
					Returns accepted within 3 days, only for damaged or wrong products.
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1">
					Returns accepted within 7 days
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1">
					Returns accepted within 30 days
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1">
					Input your custom returns accepted days &nbsp;
				  </label>
				
				<input type="text" placeholder="Ex: 8mo/1yr/80days" />
				</div>
			</div>
		</div>
	</div>
</div>


</main>


<div class="container">
	<div class="col-xs-12 create-product-controls">
		<button type="button" class="btn btn-my">Back</button>
		<button type="button" class="btn btn-my pull-right">Next</button>
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