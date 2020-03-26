@extends('front-end.master')
@section('body')
    <div id="breadcrumb">
	<div class="container">
		<div class="col-md-12">
			<ol class="breadcrumb">
			  <li><a href="{{route('/')}}">Home</a></li>
			  <li class="active"> FAQ</li>
			</ol>
		</div>  <!-- end breadcrumb --->
	</div>
</div>  <!-- end breadcrumb area  --->


<div class="container">

	<aside>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Pages</h3>
			</div>
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
                    <li><a href="text.html">Text page</a></li>
                    <li><a href="{{route('contact')}}">Contact page</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                </ul>
			</div>
		</div>
		
		<div class="banner">
            <a href="#">
                <img src="{{asset('/')}}front-end/images//banner.jpg" alt="sales 2014" class="img-responsive">
            </a>
        </div>
	</div>   <!-- /.col-md-3 -->
	</aside>

	<main>
	<div class="col-md-9" >
		<div class="panel panel-default">
			<div class="panel-body">
				<h1>Frequently asked questions</h1>
				<p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
				<p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
	
				<hr>
	
				<div class="panel-group" id="accordion">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#faq1">
									What to do if I have still not received the order?
								</a>
							</h4>
						</div>
						<div id="faq1" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
									Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
									<li>Aliquam tincidunt mauris eu risus.</li>
									<li>Vestibulum auctor dapibus neque.</li>
								</ul>
							</div>
						</div>
                    </div>    <!-- /.panel -->

                    <div class="panel panel-primary">
						<div class="panel-heading">
                            <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								2. What are the postal rates?
							</a>
							</h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>  <!-- /.panel -->

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									3. Do you send overseas?
								</a>
							</h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>  <!-- /.panel -->
                </div>   <!-- /.panel-group -->
	
	
			</div>
		</div>
	
	</div> <!-- col-9 end -->
	</main>
	
	
</div>
@endsection
