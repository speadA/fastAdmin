<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\PHPTutorial\WWW\adsence-cms\public/../application/home\view\home\index.html";i:1599033960;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>IMOOC</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
		<link rel="stylesheet" type="text/css" href="/new_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_2011200_q65gk3uprc.css" />
		<link rel="stylesheet" type="text/css" href="/new_assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="/new_assets/css/index.css">
		<link rel="stylesheet" type="text/css" href="/new_assets/css/responsive.css">
		<script src="/new_assets/js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/new_assets/js/jquery.lazyload.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/new_assets/js/main.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<!-- mask -->
		<div class="ad-mask-main">
			<div class="container mask-container">
				<article class="col-md-8 col-sm-7 col-xs-12">
					<figure class="vedio-box">
						<!-- vedio遮罩 -->
						<div class="vd-mask"></div>

						<!-- 提示 -->
						<div class="vd-tip">
							<span class="iconfont icon-icon-test"></span>
							<a href="javascript:void(0)">Please enter that net!</a>
						</div>

						<!-- 网络提示 -->
						<div class="vd-warn">
							<span class="iconfont icon-jinggao warning"></span>
							network error，<br>
							video will be reloaded！
							<div class="vd-warn-btn">
								<div class="warn-btn btn-warning">OK!</div>
							</div>
						</div>

						<!-- 加载 -->
						<div class="vd-reload">
							<svg viewBox="0 0 120 120" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="circle" class="g-circles g-circles--v1">
									<circle id="12" transform="translate(35, 16.698730) rotate(-30) translate(-35, -16.698730) " cx="35" cy="16.6987298"
									 r="10"></circle>
									<circle id="11" transform="translate(16.698730, 35) rotate(-60) translate(-16.698730, -35) " cx="16.6987298"
									 cy="35" r="10"></circle>
									<circle id="10" transform="translate(10, 60) rotate(-90) translate(-10, -60) " cx="10" cy="60" r="10"></circle>
									<circle id="9" transform="translate(16.698730, 85) rotate(-120) translate(-16.698730, -85) " cx="16.6987298"
									 cy="85" r="10"></circle>
									<circle id="8" transform="translate(35, 103.301270) rotate(-150) translate(-35, -103.301270) " cx="35" cy="103.30127"
									 r="10"></circle>
									<circle id="7" cx="60" cy="110" r="10"></circle>
									<circle id="6" transform="translate(85, 103.301270) rotate(-30) translate(-85, -103.301270) " cx="85" cy="103.30127"
									 r="10"></circle>
									<circle id="5" transform="translate(103.301270, 85) rotate(-60) translate(-103.301270, -85) " cx="103.30127"
									 cy="85" r="10"></circle>
									<circle id="4" transform="translate(110, 60) rotate(-90) translate(-110, -60) " cx="110" cy="60" r="10"></circle>
									<circle id="3" transform="translate(103.301270, 35) rotate(-120) translate(-103.301270, -35) " cx="103.30127"
									 cy="35" r="10"></circle>
									<circle id="2" transform="translate(85, 16.698730) rotate(-150) translate(-85, -16.698730) " cx="85" cy="16.6987298"
									 r="10"></circle>
									<circle id="1" cx="60" cy="10" r="10"></circle>
								</g>
								<use xlink:href="#circle" class="use"></use>
							</svg>
							<div class="vd-time">
								10
							</div>
						</div>
						<!-- 图片 -->
						<div class="vd-pic-box">
							<!-- 伪弹幕 -->
							<div class="trackbox">
								<div class="track">
									<div class="child child-1">我是弹幕11111</div>
								</div>
								<div class="track">
									<div class="child child-2">我是弹幕2222222</div>
								</div>
								<div class="track">
									<div class="child child-3">我是弹幕3</div>
								</div>
							</div>
							<img class="vd-pic" src="<?php echo $video; ?>">
							<div class="vd-ctrl-box row">
								<div class="vd-l col-xs-7">
									<div class="vd-ctrl-start"><span class="iconfont icon-bofang"></span></div>
									<div class="vd-ctrl-line"></div>
								</div>
								<div class="vd-r">
									<div class="vd-ctrl-time">0:00/0:00</div>
									<div class="vd-ctrl-vol"><span class="iconfont icon-yinliang-gao"></span></div>
									<input type="range" class="vd-ctrl-range" name="" id="" value="0" />
									<div class="vd-ctrl-fullscreen"><span class="iconfont icon-quanping"></span></div>
								</div>
							</div>
						</div>
					</figure>
				</article>
				<aside class="col-md-4 col-sm-5 col-xs-12 pc-right">
					<!-- <div class="adv-right">
						<img src="img/banner2.jpg" width="300" height="250">
					</div> -->
				</aside>
			</div>
		</div>
		<!-- mask end-->
		<!-- header -->
		<header class="header-section">
			<div class="nav-container">
				<section class="container">
					<div class="lay-nav">
						<div class="nav-logo l">
							<a href="index.html"><img src="/new_assets/img/logo.png" width="160"></a>
						</div>
						<ul class="nav-item r">
							<li class="active">
								<a href="/index.php/home/index">HOME</a>
								<span></span>
							</li>
							<li>
								<a href="/index.php/home/index/lists?type=travelnews">TRAVEL NEWS</a>
								<span></span>
							</li>
							<li>
								<a href="/index.php/home/index/lists?type=destination">DESTINATION</a>
								<span></span>
							</li>
							<li>
								<a href="/index.php/home/index/lists?type=travelideas">TRAVEL IDEAS</a>
								<span></span>
							</li>
							<li>
								<a href="/index.php/home/index/lists?type=foodanddrink">FOOD & DRINK</a>
								<span></span>
							</li>
							<li>
								<a href="/index.php/home/index/lists?type=video">VIDEO</a>
								<span></span>
							</li>
						</ul>
						<div class="menu-button">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</div>
					</div>
				</section>
			</div>
		</header>
		<!-- adv in mobile -->
		<div class="adv-area">
			<img src="/new_assets/img/ad_345x345.jpg" width="300" height="250">
		</div>
		<!-- header end -->
		<section class="banner">
			<ul class="banner-in">
				<?php foreach($data as $key => $val): ?>
					<li class="banner-item col-md-3 col-sm-6 col-xs-12" onclick="details(<?php echo $val['id']; ?>)">
						<img src="<?php echo $val['logo']; ?>">
						<span class="bg-tag"><?php echo $val['name']; ?></span>
						<article class="bg-text">
							<h3 title="<?php echo $val['sketch']; ?>"><?php echo $val['sketch']; ?></h3>
							<a href="javascript:void(0)">
								<i class="iconfont icon-shijian"></i><?php echo $val['createtime']; ?>
							</a>
						</article>
						<div class="bg-pop"></div>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
		<section class="main">
			<div class="container index-container">
				<article class="col-md-8 col-sm-7 col-xs-12">
					<h3 class="art-list">Traval Tips</h3>
					<ul class="art-group">
						<?php foreach($tips as $key1 => $val1): ?>
							<li>
								<h3 class="art-tit"><a href="javascript:void(0)">10 Best Balinese Food Neighborhood Foods You Must Try When
									Visiting Bali</a></h3>
								<div class="art-pic">
									<a href="javascript:void(0)">
										<img src="<?php echo $val1['logo']; ?>">
									</a>
								</div>
								<figure class="art-in">
									<div class="art-cont">
										<dl class="art-by">
											<dt class="art-author">
												<span>by</span><a class="art-action" href="javascript:void(0)"><?php echo $val1['name']; ?></a>
											</dt>
											<dt class="art-time art-time2">
												<a href="javascript:void(0)"><i class="iconfont icon-shijian"></i><?php echo $val1['createtime']; ?></a>
											</dt>
											<dt class="art-time">
												<a href="javascript:void(0)"><i class="iconfont icon-pinglun"></i>0</a>
											</dt>
										</dl>
										<p class="art-line"><?php echo $val['sketch']; ?></p>
										<a class="read-more" href="/index.php/home/index/details?id=<?php echo $val['id']; ?>">Read more</a>
									</div>
								</figure>
							</li>
						<?php endforeach; ?>
					</ul>
				</article>
				<aside class="col-sm-4 col-xs-12 pc-right">
					<div class="adv-right" id="adv-fixed">
						<img src="/new_assets/img/ad_345x345.jpg" width="300" height="250">
					</div>
				</aside>
			</div>
		</section>
		<footer class="adv-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a class="footer-logo" href="javascript:void(0)">
							<img src="/new_assets/img/logo.png" class="img-responsive">
						</a>
						<p class="foot-info">
							We bring you the best Premium WordPress Themes that perfect for news, magazine, personal blog, etc.
							<br>
							<br>
							<a href="javascript:void(0)">Read more</a>
						</p>
					</div>
					<div class="col-md-3">
						<h4 class="footer-tit">Categories</h4>
						<div class="cate-type">
							<a href="javascript:void(0)">Destination</a>
							<a href="javascript:void(0)">Photo</a>
							<a href="javascript:void(0)">Food & Drink</a>
							<a href="javascript:void(0)">Travel Ideas</a>
							<a href="javascript:void(0)">News</a>
							<a href="javascript:void(0)">Video</a>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="footer-tit">Tags</h4>
						<div class="tag-type">
							<a href="javascript:void(0)">Backpacker</a>
							<a href="javascript:void(0)">Food</a>
							<a href="javascript:void(0)">Gear</a>
							<a href="javascript:void(0)">Resources</a>
							<a href="javascript:void(0)">Solo Travel</a>
							<a href="javascript:void(0)">Tips</a>
							<a href="javascript:void(0)">Trip Plan</a>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="footer-tit">Recent News</h4>
						<ul class="footer-news">
							<li>
								<img class="footer-news-img" src="/new_assets/img/travel8-360x180.jpg">
								<div class="footer-news-in">
									<div class="footer-news-tit">Top-Grade Meat And Seafood Are More Accessible</div>
									<dt class="art-time">
										<a href="javascript:void(0)"><i class="iconfont icon-shijian"></i>AUGUST 13, 2020</a>
									</dt>
								</div>
							</li>
							<li>
								<img class="footer-news-img" src="/new_assets/img/travel8-360x180.jpg">
								<div class="footer-news-in">
									<div class="footer-news-tit">I Visited Cancun Amid the Coronavirus Pandemic — Here’s What It Was Really Like</div>
									<dt class="art-time">
										<a href="javascript:void(0)"><i class="iconfont icon-shijian"></i>AUGUST 13, 2020</a>
									</dt>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<footer class="footer2">
			<div class="container">
				<div class="footer2-icon">
					<a href="javascript:void(0)"><i class="iconfont icon-facebook"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-tuite"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-googleplus"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-pinterest"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-vk"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-rss"></i></a>
				</div>
				<div class="footer2-com">© 2020 Traveleidos.com - All rights reserved.</div>
			</div>
		</footer>
		<!-- scroll top -->
		<div class="jscroll-to-top" id="goToTop">
			<a href="javascript:void(0)">
				<i class="iconfont icon-shangjiantou"></i>
			</a>
		</div>



		<script type="text/javascript">
			// 响应式导航
			$('.nav-item li').hover(function() {
				$('span', this).stop().css('height', '3px');
				$('span', this).animate({
					left: '0',
					width: '100%',
					right: '0'
				}, 200);
			}, function() {
				$('span', this).stop().animate({
					left: '50%',
					width: '0'
				}, 200);
			});

			var _ul = $(".nav-item")
			$(".menu-button").click(function() {
				_ul.slideUp("normal");
				$(this).toggleClass("cross");
				$(".nav-down li").removeClass("active");
				if (_ul.is(":hidden")) {
					_ul.slideDown("normal");
				} else {
					_ul.slideUp("normal");
				}
			});
			$(".nav-click").click(function() {
				if ($(this).parents("li").find(".nav-child").is(":hidden")) {
					$(".nav-click").removeClass("active");
					$(this).addClass("active");
					$(".nav-child").slideUp("fast");
					$(this).parents("li").find(".nav-child").slideDown("");
				} else {
					$(this).parents("li").find(".nav-child").slideUp("fast");
					$(this).removeClass("active");
				}
			});
			// 导航固定
			var nav = $(".nav-container")
			$(document).ready(function() {
				var p = 0,
					t = 0;
				$(window).scroll(function() {
					p = $(this).scrollTop();
					if (t < p) {
						//下滚
						nav.css({
							"transform": "translateY(-48px)",
							"transition":"all 0.3s ease"
							
						})
					} else {
						//上滚   
						nav.css({
							"transform": "translateY(0)",
							"transition":"all 0.3s ease"
						})
					}
					setTimeout(function() {
						t = p;
					}, 500)
				})
			})
			// load mask
			if(<?php echo $status; ?>){
				showMask()
			}else{
				hideMask()
			}
			function showMask(){
				$(".ad-mask-main").show()
				$('body').css("overflow","hidden");
				$(".index-container .adv-right").addClass("index5999")
			}
			function hideMask(){         
				$(".ad-mask-main").hide();  
				$('body').css("overflow","auto");
			}
			function details(id){
				window.location.href='/index.php/home/index/details?id='+id;
			}
		</script>

	</body>
</html>
