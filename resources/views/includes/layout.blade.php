
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="css/kypressTheme.css" type="text/css" media="screen">

<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="znn_mobile-css" href="assets/mobile.css?ver=1.0" type="text/css" media="only screen and (max-width: 400px)">
<!--[if IE 8]>
<link rel='stylesheet' id='znn_ie-css'  href='css/ie.css?ver=1.5' type='text/css' media='all' />
<![endif]-->
<link rel="stylesheet" id="customfont-css" href="assets/fonts/exo.css?ver=4.3.4" type="text/css" media="all">


<style type="text/css">
.skew_bottom_big, .skew_bottom_right, .skew_top_big, .skew_top_right, .single_skew, .single_skew .skew_bottom_big, .single_skew .skew_bottom_right, .depth-1 .single_skew, .single_skew_comm, .single_skew_comm .skew_top_big, .single_skew_comm .skew_top_right, #respond_wrap .single_skew, #respond_wrap .single_skew_comm{display:none!important;}
.commentlist .depth-1{ margin-top:10px;}
.midrow_blocks{ margin-top:30px;}
.commentlist li{border-bottom:1px solid #ececec; border-top:1px solid #ececec;}
</style>

<style type="text/css" id="custom-background-css">
  body.custom-background { background-image: url('images/newsprint_bg2.jpg');
  background-repeat: repeat;
  background-position: top center;
  background-attachment: fixed; }
</style>

</head>


<body class="home blog custom-background">

<div class="social_wrap">
  <div class="social">
    <ul>
      <li class="soc_fb" style="opacity: 0.3;">
        <a title="Facebook" target="_blank" href="http://www.facebook.com/kypress">Facebook</a>
      </li>
      <li class="soc_tw" style="opacity: 0.3;">
        <a title="Twitter" target="_blank" href="https://twitter.com/ky_press">Twitter</a>
      </li>
   </ul>
  </div>
</div>


<div class="center">
<!--HEADER START-->
  <div id="header">


	<!--LOGO START-->
    <div class="logo">
      <a href="http://www.kypress.com/convention/">
    	  <img src="images/header.png">
    	</a>
    </div>

        <!--LOGO END-->
@include ('includes.clientHeader')


</div>
<!--HEADER END-->
<!--SLIDER END-->
<div class="slider_wrap">
    <div id="zn_slider">

		<div id="slider" class="easyslider" style="width: 1000px; height: 560px; overflow: hidden;">
			<h2 style="text-align:center;">dynamic title</h2>
      @yield('content')
		</div>

	</div>
</div>

<!--SLIDER END-->


<!--LATEST POSTS-->
	<!--LATEST POSTS END-->
@include ('includes.footer')


</div>

</body>
</html>
