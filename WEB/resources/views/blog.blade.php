<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />

	<title>UKF</title>
	
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-kit.css" rel="stylesheet"/>
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
	

</head>
<body class="blog">
	<header>
		<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" role="navigation">
			<div class="container">
		    	<div class="navbar-header">
		    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		    		</button>
		    		<a class="navbar-brand" href="index.html"><img src="images/logo2.jpg"></a>
		    	</div>

		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    		<ul class="nav navbar-nav navbar-right">
		        		<li><a href="{{route('index')}}">Thiết kế nội thất</a></li>
		        		<li><a href="{{route('rest')}}">Thi công vận hành nhà hàng</a></li>
		        		<li class="active"><a href="{{route('blog')}}">Blog</a></li>
		        		<li><a href="{{route('contact')}}">Liên hệ</a></li>
		        		<li><a href="#"><i class="material-icons">language</i>VIE/ENG</a></li>		
		    		</ul>
		    	</div>
			</div>
		</nav>

		<div class="intro-header">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="intro-message">
	                        <h2 class="tlt" data-in-effect="flip" data-out-effect="tada" data-out-shuffle="true">Blog</h2>
	                    </div>
	                </div>
	            </div>

	        </div>
	        <!-- /.container -->

	    </div>
	</header>

	<main class="main main-raised">
		
		<div class="container">
			<div class="row">
				<div class="col-md-9 left">
					<div id="blog">
						@foreach($Blog as $BL)
						<div class="post">
							<div class="card">
								<a href="#"><img class="card-image" src="images/OE9V430.jpg" width="100%"></a>
								<div class="post-description">
									<h3 class="title">
										{{$BL->title}}
									</h3>
									<h6 class="post-author">ADMIN</h6><h6 class="post-date">{{$BL->created_at}}</h6>
									<div>
										{!!$BL->content!!}
									</div>
									<!--<div class="action">
										<div class="like"><a><i class="material-icons">favorite_border</i>  3 Likes</a></div>
										<div class="comment"><a data-toggle="collapse" data-parent="#blog" href="#comment-box1"><i class="material-icons">message</i>   0 Comments</a></div>
									</div>

									<div id="comment-box1" class="comment-box collapse text-right">
										<textarea placeholder="Bình luận" class="form-control"></textarea>
										<button type="button" class="btn btn-primary">Bình luận</button>
									</div>-->
									
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-md-3 right">
					<div class="card">
						<div class="search">
							<div class="form-group form-white is-empty">
	                    		<input type="text" class="form-control" placeholder="Search">
	                    		<span class="material-input"></span>
	                		</div>
	                		<button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini"><i class="material-icons">search</i><div class="ripple-container"></div></button>
						</div>
					</div>
					
					<div class="card">
						<h4 class="title">Categories</h4>
						<hr style="margin-top:0">
						<ul>
							<li><a href="#">NONE</a></li>
						</ul>
					</div>
					<div class="card">
						<h4 class="title">Archives</h4>
						<hr style="margin-top:0">
						<ul>
							<li><a href="#">NONE</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="sub-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="logo">
							<ul class="nav">
								<li><h4 class="title">U.K.F CO., LTD.</h4></li>
								<li>
									<a class="navbar-brand" href="index.html"><img src="images/UKFLogo-Doc.png" style="width:215px"></a>
								</li>

							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="services">
							<ul class="nav">
								<li><h4 class="title">DỊCH VỤ</h4></li>
								<li>
									<h5><a href="#">TƯ VẤN THIẾT KẾ NỘI THẤT</a></h5>
								</li>
								<li>
									<h5><a href="#">THI CÔNG NỘI THẤT</a></h5>
								</li>
								<li>
									<h5><a href="#">Tư vấn giải pháp vận hành nhà hàng</a></h5>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="about-us">
							<ul class="nav">
								<li><h4 class="title">VỀ CHÚNG TÔI</h4></li>
								<li>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse suscipit ex ante, eget congue est accumsan quis. Proin rutrum, leo eu accumsan maximus, orci enim gravida massa, a rhoncus erat enim sed eros. Donec dapibus magna vitae velit pellentesque sollicitudin. Vivamus et egestas dui, sed ultricies sapien. Morbi eleifend, nisi vel molestie fringilla, neque ligula aliquam magna, sodales mollis nisl risus dictum elit. Praesent vulputate ullamcorper feugiat.</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="social-icons">
						<h4 class="title">LIÊN KẾT</h4>
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">pin_drop</i>
    						</div>
    						<div class="contact-description">
    							<p> 8 Điện Biên phủ, Phường 1, Quận 1, TP.HCM</p>
    						</div>
    		        	</div>
                        <div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">phone</i>
    						</div>
    						<div class="contact-description">
    							<p> Michael Jordan<br>
                                    +40 762 321 762<br>
                                    Mon - Fri, 8:00-22:00
    							</p>
    						</div>
    		        	</div>
    		        	<div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">email</i>
    						</div>
    						<div class="contact-description">
    							<p>contact@ukf.vn</p>
    						</div>
    		        	</div>	
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span>Copyright © 2020 U.K.F. All Rights Reserved</span>
				</div>
			
			</div>
		</div>
		</div>
	</footer>
</body>

<!--   Core JS Files   -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/material.min.js"></script>
	<script src="js/jquery.lettering.js"></script>
	<script src="js/jquery.textillate.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.tlt').textillate({
				loop: true,
				callback: function () {}
			});
		});
	</script>

</html>