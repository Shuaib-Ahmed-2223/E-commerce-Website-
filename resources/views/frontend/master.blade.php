<!DOCTYPE HTML>
<html>
<head>
<title> E-Commerce Shop</title>
<!--css-->
<link href="{{ asset('/frontend/assets/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('/frontend/assets/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/frontend/assets/')}}/css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{ asset('/frontend/assets/')}}/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	@include('frontend.includes.script')
	<style>
		.checkout{
			margin-top: 100px;
			box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
			padding: 30px;
			margin-bottom: 30px;
		}
	</style>
<!--//End-rate-->
</head>
<body>
	<!--header-->
		@include('frontend.includes.header')
		<!--header-->
		<!--banner-->
		@yield('content')
		<!--content-->
		<!---footer--->
					@include('frontend.includes.footer')
					<!---footer--->
					<!--copy-->
					

</body>
</html>