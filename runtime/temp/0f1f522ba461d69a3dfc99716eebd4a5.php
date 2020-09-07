<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\phpstudy\PHPTutorial\WWW\fastadmin\public/../application/home\view\home\index.html";i:1566041011;s:76:"D:\phpstudy\PHPTutorial\WWW\fastadmin\application\home\view\public\head.html";i:1565857853;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dove</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="__IMAGE__/favicon.ico">
		<link rel="shortcut icon" href="__IMAGE__/favicon.ico">
		<link rel="stylesheet" href="/fastadmin/public/static/css/stuck.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/owl.carousel.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/form.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/touchTouch.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/camera.css">
		<link rel="stylesheet" href="/fastadmin/public/static/css/style.css">
		<script src= "/fastadmin/public/static/js/jquery.js" ></script>
		<script src="/fastadmin/public/static/js/jquery-migrate-1.1.1.js"></script>
		<script src="/fastadmin/public/static/js/script.js"></script>
		<script src="/fastadmin/public/static/js/superfish.js"></script>
		<script src="/fastadmin/public/static/js/jquery.equalheights.js"></script>
		<script src="/fastadmin/public/static/js/jquery.mobilemenu.js"></script>
		<script src="/fastadmin/public/static/js/jquery.easing.1.3.js"></script>
		<script src="/fastadmin/public/static/js/tmStickUp.js"></script>
		<script src="/fastadmin/public/static/js/jquery.ui.totop.js"></script>
		<script src="/fastadmin/public/static/js/touchTouch.jquery.js"></script>
		<script src="/fastadmin/public/static/js/owl.carousel.js"></script>
		<script src="/fastadmin/public/static/js/sForm.js"></script>
		<script src="/fastadmin/public/static/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="/fastadmin/public/static/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '200',
				thumbnails: false,
				height: '39,0625%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			var owl = $("#owl");
			owl.owlCarousel({
				items : 7, //10 items above 1000px browser width
				itemsDesktop : [995,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 3], // betweem 900px and 601px
				itemsTablet: [700, 3], //2 items between 600 and 0
				itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
			});
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
	<body class="page1" id="top">
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
			<div class="slider_wrapper">
				<div id="camera_wrap" class="">
					<?php foreach($data as $val): ?>
					<p><?php echo $val['title']; ?></p>
					<div data-src="/fastadmin/public<?php echo $val['path']; ?>">
						<div class="caption fadeIn">
							<div class="title"><?php echo $val['title']; ?></div>
							<p><?php echo $val['des1']; ?></p>
							<p><?php echo $val['des2']; ?></p>
							<a href="<?php echo $val['hrefa']; ?>"><?php echo $val['hreftitle']; ?></a>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
<!--=====================Content======================-->
			<div class="block1">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<div class="rel">
                                <p><?php echo $introduce['title']; ?></p>
                                <a href="<?php echo $introduce['hrefa']; ?>" class="btn bt__1"><?php echo $introduce['hreftitle']; ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!--底部轮播-->
			<section class="content">
				<div class="container"><div class="ic"></div>
					<div class="row">
						<div class="grid_12">
							<h2>Portfolio</h2>
							<div class="gallery">
								<div class="row">
                                    <?php foreach($bodyimglist as $bodyimglistv): ?>
                                    <div class="grid_4">
                                        <a href="/fastadmin/public/static<?php echo $bodyimglistv['path1']; ?>" class="gal_item">
                                            <img src="/fastadmin/public/static<?php echo $bodyimglistv['path2']; ?>" alt="">
                                            <div class="gal_caption"><?php echo $bodyimglistv['type']; ?></div>
                                            <span class="gal_magnify"></span>
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="grid_4">
							<h3 class="mb__0">Equipment</h3>
							<div class="block2">
								<div class="block2_title color1">Camera</div>
									<ul class="list">
									<li><a href="#">Lorem ipsum dolorertolo </a></li>
									<li><a href="#">Git met consecteturert </a></li>
									<li><a href="#">Odipiscing elit mollis erat</a></li>
								</ul>
							</div>
							<div class="block2">
								<div class="block2_title color1">Lighting</div>
								<ul class="list">
									<li><a href="#">Lorem ipsum dolorilomo </a></li>
									<li><a href="#">Aconsectetur teroloter </a></li>
									<li><a href="#">Sdipiscing elitmollis erat </a></li>
								</ul>
							</div>
						</div>
						<div class="grid_4">
							<h3>About me</h3>
							<p>Need more information about this thingummy? Follow the <span class="color1">link</span>.</p>
							<p>Choose <span class="color1">designs</span> of this kind at TemplateMonster’s website.</p>
							Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsanInteger convallis orci vel mi laoreet, at ornare lorem consequatasellus erat nisl<br>
							<a href="#" class="btn bt__2">Read More</a>
						</div>
						<div class="grid_4">
							<h3>Publications</h3>
							<ul class="list1">
								<li>
									<div class="list_count">1</div>
									<div class="extra_wrapper">
										<div class="list1_title color2"><a href="#">orem ipsum dolor sit met </a></div>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras
										<a href="#" class="color1 td_und">More</a>
									</div>
								</li>
								<li>
									<div class="list_count">2</div>
									<div class="extra_wrapper">
										<div class="list1_title color2"><a href="#">“Dorem ipsum dolor sit met </a></div>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras
										<a href="#" class="color1 td_und">More</a>
									</div>
								</li>
								<li>
									<div class="list_count">3</div>
									<div class="extra_wrapper">
										<div class="list1_title color2"><a href="#">“Kerem ipsum dolor sit met </a></div>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras
										<a href="#" class="color1 td_und">More</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="clear"></div>
						<div class="grid_12">
							<h3 class="head1">Multimedia</h3>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div id="owl">
                    <?php foreach($buttomimglist as $buttomimglistv): ?>
					<div class="item"><img src="/fastadmin/public/static<?php echo $buttomimglistv['path']; ?>" alt=""></div>
                    <?php endforeach; ?>
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
    <script type="javascript">
        $(document).ready(function() {
             $.ajax({
                type:"post",
                url:"127.0.0.1/fastadmin/public/index.php/home/Index/getCarouselist",
                data:'',
                // data:{data:1},
                dataType:'json',
                error:function(response){
                    console.log('error');
                    console.log(response);
                    alert(response);
                },
                success:function(data){
                    var carous = [];
                    for( var i = 0;i<3;i++ ){
                        carous[i] = data[i]['path'];
                    }
                    console.log(carous);
                    $("#test").src= "carous[0]";
                }
            });


        })

    </script>

</html>