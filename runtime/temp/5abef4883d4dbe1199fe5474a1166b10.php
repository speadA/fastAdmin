<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\PHPTutorial\WWW\adsence-cms\public/../application/home\view\home\detail.html";i:1598945343;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>detail</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
		<link rel="stylesheet" type="text/css" href="/new_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_2011200_z8ho3b7msg.css" />
		<link rel="stylesheet" type="text/css" href="/new_assets/css/index.css">
		<link rel="stylesheet" type="text/css" href="/new_assets/css/responsive.css">
		<script src="/new_assets/js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/new_assets/js/main.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		
		<!-- adv in mobile -->
		<div class="adv-area">
			<img src="/new_assets/img/ad_345x345.jpg" width="300" height="250">
		</div>
		
		<section class="main">
			<div class="brand-nav">
				<div class="container">
					<div class="brand-nav-in">
						<a class="home" href="index.html">Home</a><i>></i><a class="detail" href="detail.html">Travel Ideas</a>
					</div>
				</div>
			</div>
			<div class="container index-container">
				<article class="col-md-8 col-sm-7 col-xs-12">
					<div class="detail-in">
						<h2 class="detail-tit"><?php echo $res['sketch']; ?></h2>
						<?php echo $res['content']; ?>
					</div>
					<div class="detail-tag">
						<span>Tags:</span>
						<a href="javascript:void(0)">Gear</a>
						<a href="javascript:void(0)">Resources</a>
						<a href="javascript:void(0)">Solo Travel</a>
						<a href="javascript:void(0)">Tips</a>
					</div>
					<div class="detail-share">
						<a href="javascript:void(0)" class="detail-share-link facebook">
							<i class="iconfont icon-facebook"></i><span>Share</span>
						</a>
						<a href="javascript:void(0)" class="detail-share-link tweet">
							<i class="iconfont icon-tuite"></i><span>Tweet</span>
						</a>
						<a href="javascript:void(0)" class="detail-share-link google">
							<i class="iconfont icon-googleplus"></i><span>Share</span>
						</a>
						<a href="javascript:void(0)" class="link">
							<i class="iconfont icon-share"></i>
						</a>
					</div>
					<form action="" method="post">
						<div class="detail-comment">
							<div class="admin-box">
								<img src="/new_assets/img/admin.png" >
								<a href="javascript:void(0)">admin</a>
							</div>
						</div>
						<div class="admin-line"></div>
						<div class="detail-replay">
							<h3 class="replay-tit">Leave a Reply</h3>
							<p class="replay-tip">Your email address will not be published. Required fields are marked <span class="form-must">*</span></p>
							<div class="detail-replay-box">
								<h4>Comment</h4>
								<textarea class="form-control" rows="8" cols="45" required="required">
									
								</textarea>
							</div>
							<div class="detail-replay-box">
								<h4>Name<span class="form-must">*</span></h4>
								<input type="text" class="form-control" name="" id="" value="" />
							</div>
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="detail-replay-box">
										<h4>Email<span class="form-must">*</span></h4>
										<input type="text" class="form-control" name="" id="" value="" />
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="detail-replay-box">
										<h4>Website</h4>
										<input type="text" class="form-control" name="" id="" value="" />
									</div>
								</div>
							</div>
							<div class="replay-save">
								<div class="checkbox">
									<label>
										<input type="checkbox">Save my name, email, and website in this browser for the next time I comment.
									</label>
								</div>
							</div>
							<form action="" method="post">
								<input type="submit" class="replay-submit" value="Post Comment"/>
							</form>
						</div>
					</form>
				</article>
				<aside class="col-sm-4 col-xs-12 pc-right">
					<div class="adv-right">
						<img src="/new_assets/img/banner2.jpg" width="300" height="250">
					</div>
				</aside>
			</div>
		</section>
		<!-- footer -->
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
		<!-- footer end -->
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
			
			
		</script>

	</body>
</html>





