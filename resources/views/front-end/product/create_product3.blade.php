
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
        <li class="active">Product</li>
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
	<div class="col-xs-12 create-product-controls">
		<button type="button" class="btn btn-my pull-right">Next</button>
	</div>
</div>

<div class="container">
	<div class="row ">
		<div class="col-md-12 ">
			<h4>Upload Your Product Images</h4>
			<p>Upload clear and good quality pictures. At least one image is mandatory and should be bigger than 500 x 500</p>
		</div>
	</div>
	<div class="row create-product-upload">
		<div class="col-md-3 ">
			<p>Main Photo 1/4</p>
			<div class="input-file">
				<input type="file" />
			</div>
		</div>
		<div class="col-md-3 ">
			<p>Main Photo 1/4</p>
			<div class="input-file">
				<input type="file" />
			</div>
		</div>
		<div class="col-md-3 ">
			<p>Main Photo 1/4</p>
			<div class="input-file">
				<input type="file" />
			</div>
		</div>
		<div class="col-md-3 ">
			<p>Main Photo 1/4</p>
			<div class="input-file">
				<input type="file" />
			</div>
		</div>
		<div class="col-md-12">
		<button type="button" class="btn btn-my" data-toggle="modal" data-target="#image-upload">More upload</button>

		<!-- Modal -->
<div id="image-upload" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">More Products Upload</h4>
      </div>
      <div class="modal-body">
       <input type="file" >
	   <input type="file" >
	   <input type="file" >
	   <input type="file" >
	   <input type="file" >
	   <input type="file" >
	   <input type="file" >
	   <input type="file" >
      </div>
      <div class="modal-footer">
		 <button type="button" class="btn btn-my" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row ">
		<div class="col-md-12 ">
			<h4>Product Details</h4>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-12 ">
			<div class="create-product-details">
				<form class="form-horizontal">
				  <div class="form-group">
					<label for="name" class="col-sm-2 control-label" >Product Name *</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="name" placeholder="Insert Product Name">
					</div>
				  </div>
				</form>
				<h5>Description *</h5>
				<textarea class="form-control" rows="4"></textarea>
				<h5>Description *</h5>
				<textarea class="form-control" rows="4"></textarea>

				<div class="row">
					<div class="col-md-3">
						<div class=" form-group">
							<label for="Category">Category *</label>
							<select class="form-control" id="Category">
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" form-group">
							<label for="Category">Category *</label>
							<select class="form-control" id="Category">
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" form-group">
							<label for="Category">Category *</label>
							<select class="form-control" id="Category">
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" form-group">
							<label for="Category">Category *</label>
							<select class="form-control" id="Category">
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
							</select>
						</div>
					</div>

				</div>


				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="Item">Item weight *</label>
							<input type="text" class="form-control " id="Item" placeholder="Please insert a valid number">
						</div>
					</div>
					<div class="col-md-3">
						<div class=" form-group">
							<label for="Category">Category *</label>
							<select class="form-control" id="Category">
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
								<option>man</option>
							</select>
						</div>
					</div>

				</div>

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
				<div class="form-group">
					<label for="Quantity">Quantity *</label>
					<input type="number" class="form-control width-control" id="Quantity" placeholder="...">
				</div>

				<div class="form-group">
					<label for="Price">Price with tax *</label>
					<input type="text" class="form-control width-control" id="Price" placeholder="Price">
				</div>
				<label>Listing duration (in days)</label>
				<div class="radio">
					<label>
					  <input name="checkbox1" type="radio">&nbsp 90 days &nbsp
					</label>
					<label>
					  <input name="checkbox1" type="radio">&nbsp Never Delete This Product
					</label>
				 </div>

			</div>
		</div>
	</div>
</div>




</main>


<div class="container">
	<div class="col-xs-12 create-product-controls">
		<a href="{{route('create_product4')}}"><button type="button" class="btn btn-my pull-right">Next</button></a>
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
