<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpStudy\PHPTutorial\WWW\fastadmin\public/../application/home\view\home\vedio.html";i:1597629111;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>IMOOC</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<!-- 字体图标 -->
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_2006358_oqv17mjhcw.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row vd-row">
					<div class="col-md-8 vd-popup">
						<figure class="vedio-box">
							
							<!-- 遮罩 -->
							<div class="vd-mask"></div>
							
							<!-- 提示 -->
							<div class="vd-tip">
								<span class="iconfont iconicon--jinggao"></span>
								<a href="javascript:void(0)">Please enter that net!</a>
							</div>
							
							<!-- 网络提示 -->
							<div class="vd-warn">
								<span class="iconfont iconjinggao"></span>
								network error，<br>
								video will be reloaded！
								<div class="vd-warn-btn">
									<div class="warn-btn">OK!</div>
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
								<img class="vd-pic" src="img/banner.jpg"  >
								<div class="vd-ctrl-box row">
									<div class="vd-l col-xs-7">
										<div class="vd-ctrl-start"><span class="iconfont iconbofang"></span></div>
										<div class="vd-ctrl-line"></div>
									</div>
									<div class="vd-r">
										<div class="vd-ctrl-time">0:00/0:00</div>
										<div class="vd-ctrl-vol"><span class="iconfont iconyinliang-gao"></span></div>
										<input type="range" class="vd-ctrl-range" name="" id="" value="0" />
										<div class="vd-ctrl-fullscreen"><span class="iconfont iconquanping"></span></div>
									</div>
								</div>
							</div>
						</figure>

					</div>
					<div class="vd-google">
						<div class="vd-google-in">
							谷歌广告位
						</div>
					</div>
				</div>
			</div>
		</header>

		<script src="js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			
			// tip
			$(".vd-tip").click(function() {
				$(this).fadeOut()
				$(".vd-reload").fadeIn()
				tmRun()
			})
			$(".warn-btn").click(function(){
				$(this).parents(".vd-warn").hide();
				$(".vd-reload").fadeIn();
				tmRun()
			})
			// 倒计时
			function tmRun() {
				var second = 10;
				var time = setInterval(function() {
					second--;
					if (second <= 1) {
						clearInterval(time);
						$(".vd-reload").hide()
						$(".vd-warn").show()
						second = 10
					}
					$(".vd-time").html(second)
				}, 800);
			}
		</script>

	</body>
</html>
