<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\phpstudy\PHPTutorial\WWW\fastadmin\public/../application/home\view\home\index-1.html";i:1565857853;s:76:"D:\phpstudy\PHPTutorial\WWW\fastadmin\application\home\view\public\head.html";i:1565857853;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="/fastadmin/public/static/css/stuck.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/form.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/touchTouch.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/style.css">
		<script src="/fastadmin/public/static/js/jquery.js"></script>
		<script src="/fastadmin/public/static/js/jquery-migrate-1.1.1.js"></script>
		<script src="/fastadmin/public/static/js/script.js"></script>
		<script src="/fastadmin/public/static/js/superfish.js"></script>
		<script src="/fastadmin/public/static/js/jquery.equalheights.js"></script>
		<script src="/fastadmin/public/static/js/jquery.mobilemenu.js"></script>
		<script src="/fastadmin/public/static/js/jquery.easing.1.3.js"></script>
		<script src="/fastadmin/public/static/js/tmStickUp.js"></script>
		<script src="/fastadmin/public/static/js/jquery.ui.totop.js"></script>
		<script src="/fastadmin/public/static/js/touchTouch.jquery.js"></script>
		<script src="/fastadmin/public/static/js/sForm.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
		});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="/fastadmin/public/static/js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="/fastadmin/public/static/css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		
<block name="head">
    <header>
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <h1>
                            <a href="index.html">
                                <img src="/fastadmin/public/static/images/logo.png" alt="Your Happy Family">
                            </a>
                        </h1>
                        <div class="menu_block">
                            <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                <ul class="sf-menu">
                                    <li class="current"><a href="index.html">About</a></li>
                                    <li><a href="http://127.0.0.1/fastadmin/public/index.php/home/Index/imgFirst.html">Portfolio</a></li>
                                    <li><a href="http://127.0.0.1/fastadmin/public/index.php/home/Index/imgSecond.html">Resume</a></li>
                                    <li><a href="http://127.0.0.1/fastadmin/public/index.php/home/Index/imgThird.html">Blog</a></li>
                                    <li><a href="http://127.0.0.1/fastadmin/public/index.php/home/Index/imgFourth.html">Contacts</a></li>
                                </ul>
                            </nav>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</block>

		<div class="main">
<!--=====================Content======================-->
			<section class="content cont_pad1">
				<div class="container"><div class="ic"></div>
					<div class="gallery gall__1">
						<div class="row">
							<div class="grid_4">
								<h3>People</h3>
							</div>
							<div class="clear"></div>
							<?php foreach($data['people'] as $val): ?>
							<div class="grid_4">
								<a href="/fastadmin/public/static<?php echo $val['path']; ?>" class="gal_item">
									<img src="/fastadmin/public/static<?php echo $val['path']; ?>" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">15Jan 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<?php endforeach; ?>
							<div class="grid_4">
								<h3>Animals</h3>
							</div>
							<div class="clear"></div>
							<?php foreach($data['animals'] as $val): ?>
							<div class="grid_4">
								<a href="/fastadmin/public/static<?php echo $val['path']; ?>" class="gal_item">
									<img src="/fastadmin/public/static<?php echo $val['path']; ?>" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">15Jan 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<?php endforeach; ?>
							<div class="grid_4">
								<h3>Nature</h3>
							</div>
							<div class="clear"></div>
							<?php foreach($data['nature'] as $val): ?>
							<div class="grid_4">
								<a href="/fastadmin/public/static<?php echo $val['path']; ?>" class="gal_item">
									<img src="/fastadmin/public/static<?php echo $val['path']; ?>" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">15Jan 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</section>
<!--==============================Bot_block=================================-->
			<section class="bottom_block">
				<div class="container">
					<div class="row">
						<div class="grid_5">
							<div class="bot_title">
								<span class="fa fa-envelope-o"></span>Subscribe to My Newsletter
							</div>
						</div>
						<div class="grid_7">
							<form id="newsletter">
								<div class="row">
									<div class="grid_4">
										<div class="rel">
											<div class="success">Your subscrsibe request has been sent!</div>
											<label class="email">
												<input type="email" value="Your Email Address Here" >
												<span class="error">*This is not a valid email address.</span>
												<span class="clear"></span>
											</label>
										</div>
									</div>
									<div class="grid_3">
										<a href="#" class="btn bt__2" data-type="submit">Submit</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="grid_12">
						<div class="footer_socials">
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-google-plus"></a>
							<a href="#" class="fa fa-pinterest"></a>
						</div>
						<div class="copy">
							<span class="brand">KatrineDove</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
							<div class="sub_copy">
Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.51xuediannao.com/muban/">网站模板</a>							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
</body>
</html>