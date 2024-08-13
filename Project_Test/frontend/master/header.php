<?php
// echo getBaseUrl(); // for getting the url to create my functions.
//echo getBaseUrl('assets/css/mystyle.css');
?>
<!Doctype html>
<html>
	<head>
		<title>Student | <?php echo ucfirst(basename($_SERVER['PHP_SELF'],'.php'))?></title>
		<base href="<?php echo getBaseUrl('assets/')?>" />
		<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo BASE_URL; ?>assets/css/all.css" rel="stylesheet" type="text/css"/>

		<style>
			.ico{
			font-size:22px;
			padding:2px;
			transition:all 1s;
			}
			:root{
			--mycolor:linear-gradient(45deg,#B71C1C,#B71C1C);
			--txtmycolor:#f50057;
			}
			.txt-mycolor{
			color:var(--txtmycolor);
			}
			.bg-mycolor{
			background:var(--mycolor);
			}
			#menu ul{
			margin:0px auto;
			font-size:22px;
			}
			.navbg{
			background:white;
			}
			#menu ul li a{
			color:#B71C1C !important;
			}
			.Category{
			min-height:100px;
			}
			.view{
			background:#B71C1C;
			color:white;
			}
			</style>
			</head>
	<body>

<body>
<div class="container-fluid">
<div class="row ttop bg-light text-center py-1 bg-mycolor text-light">
<div class="col-lg-6 col-md-6 col-sm-12">
<i class="fa-solid fa-envelope"></i>
ak9517462621@gmail.com
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<i class="fa-brands fa-facebook ico"></i>
<i class="fa-brands fa-twitter ico"></i>
<i class="fa-brands fa-youtube ico"></i>
<i class="fa-brands fa-instagram ico"></i>
</div>
</div>
<div class="row">
<div class="col-sm-12 font">
<center>
<img src="<?php echo getBaseUrl('assets/images/logo.png')?>" class="img-fluid" style="max-height:100px;"/>
</center>
</div>
</div>
<div class="row">
<div class="col-sm-12 navbg">
<!--start menu-->
<nav id="menu" class="navbar navbar-expand-lg navbar-light m-0 p-0">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo getBaseUrl('index.php/')?>">
		  <i class="fa-solid fa-house"></i>
		   Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo getBaseUrl('index.php/about')?>"><i class="fa-solid fa-circle-info"></i> About Us</a>
        </li>        
		<li class="nav-item">
          <a class="nav-link" href="<?php echo getBaseUrl('index.php/News')?>"><i class="fa-solid fa-newspaper"></i> News</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="<?php echo getBaseUrl('index.php/gallery')?>"><i class="fa-solid fa-image"></i> Gallery</a>
        </li>
       
		<li class="nav-item">
          <a class="nav-link" href="<?php echo getBaseUrl('index.php/contact')?>"><i class="fa-solid fa-envelope"></i> Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="<?php echo getBaseUrl('index.php/blog')?>"><i class="fa-solid fa-blog"></i> Blog</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="<?php echo getBaseUrl('index.php/FAQ')?>"><i class="fa-solid fa-comment"></i> Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo getBaseUrl('index.php/login')?>"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--end menu-->
</div>
</div>
