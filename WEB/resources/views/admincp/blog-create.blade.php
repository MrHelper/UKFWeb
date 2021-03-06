<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/summernote.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
    
</head>
<body style="padding:0px;">
	<div class="loading" id="LoadingDiv">Loading&#8230;</div>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Title</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Menu</h3>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item">Dashboard</a>
						<a href="{{route('admincp.L-TKNT')}}" class="list-group-item">Thiết kế nội thất</a>
						<a href="{{route('admincp.L-TCNH')}}" class="list-group-item">Thi công khách sạn</a>
						<a href="{{route('admincp.L-BLOG')}}" class="list-group-item">Blog</a>
					</div>
				</div>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Thiết kế nội thất</h3>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<input type="text" class="form-control" id="title"  placeholder="Tiêu đề" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="categlory"  placeholder="Danh mục" required>
						</div>
						<div class="form-group">
	                    <textarea class="form-control" type="textarea" id="content" placeholder="Nội dung"></textarea>
	                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
	                    </div>
						<div class="form-group">
							<input type="file" name="imageup" value="" placeholder="" id="Image">
						</div>
						<hr>
	                    <div class="form-group">
	                    <button id="btnAceept" type="button" class="btn btn-primary">Chấp nhận</button>
	                    <button id="btnCancel" type="button" class="btn btn-primary pull-right">Huỷ</button>
	                    </div>
					</div>
				</div>
				<div class="hidden" id="Decode">
					
				</div>
			</div>
		</div>
	</div>
</body>

<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/material.min.js')}}"></script>
	<script src="{{ asset('js/jquery.lettering.js')}}"></script>
	<script src="{{ asset('js/jquery.textillate.js')}}"></script>
	<script src="{{ asset('js/summernote.min.js')}}"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#LoadingDiv').fadeOut();
			$('#content').summernote({
				height: 300,
			});
		});

		$('#btnAceept').on('click',function(){
			if(CheckInput())
				CreateDuAn();
		});

		function CheckInput(){
			if($('#title').val() == "" || $('#categlory').val() =="" || $('#content').val() == "")
				return false;
			else 
				return true;
		}

		function ClearControl(){
			$('#title').val("");
			$('#categlory').val("");
			$('#content').summernote('code',"");
			$("#Image").val("");
		}

		function CreateDuAn(){
			$('#LoadingDiv').fadeIn();
			var formData = new FormData;
			var uploadfile = $('input[name=imageup]')[0].files[0];
			var title = $('#title').val();
			var categlory = $('#categlory').val();
			var content = $('#content').summernote('code');
			//TTSP.replace(/\"/g, "\'");
			formData.append('title',$('#title').val());
			formData.append('categlory',categlory);
			formData.append('content',content);
			formData.append('images',uploadfile);
			$.ajax({
	            headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	            url: '{{route('admincp.CreateBLOG')}}',
	            type: 'POST',
	            processData: false,
	            contentType: false,
	            cache: false,
	            data: formData,
	            dataType: 'JSON',
	            success:function(data){
	                $('#LoadingDiv').fadeOut();
	                ClearControl();
	            }
	        });
		}
	</script>
</html>
