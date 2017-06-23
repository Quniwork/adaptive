<!DOCTYPE html>
<html class="live zh-cn">

<head>
	<meta charset="UTF-8">
	<title>视讯直播</title>
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Share core Javascript -->
	<script src="../js/jquery.js"></script>
</head>

<body>
	<!--mainBody-->
	<div id="mainBody">
		<!--page-header-->
		<div id="page-header">
			<div class="header-top-bg"></div>
			<div class="page-wrap">
				<div class="header-top">
					<div class="logo"><a href="index.php"><img src="image/logo.png" /></a></div>
					<!--mainnav-->
					<div class="mainnav" data-lsub-y="20">
						<ul class="nav">
							<li id="LS-first" class="LS-first"><a href="index.php">首頁</a></li>
							<li id="LS-ball" class="LS-ball"><a href="#">体育赛事</a>
								<div id="nav-ball" class="ele-drop-group" style="display:none">
									<div class="lsub-inner-wrap">
										<a v-for="todo in todos" :href="todo.link">{{todo.name}}</a>
									</div>
								</div>
							</li>
							<li id="LS-live" class="LS-live current"><a href="live.php">视讯直播</a></li>
							<li id="LS-game" class="LS-game"><a href="#">电子游艺</a>
								<div id="nav-game" class="ele-drop-group" style="display:none">
									<div class="lsub-inner-wrap">
										<a v-for="todo in todos" :href="todo.link">{{todo.name}}</a>
									</div>
								</div>
							</li>
							<li id="LS-lottery" class="LS-lottery"><a href="lottery.php">彩票游戏</a></li>
							<li id="LS-memberexclusiveii" class="LS-memberexclusiveii"><a href="promotions.php">优惠活动</a></li>
							<li id="LS-mobile" class="LS-mobile"><a href="#">手机下注</a></li>
							<li id="LS-service" class="LS-service"><a href="#">在线客服</a></li>
						</ul>
					</div>
					<!--end mainnav-->
				</div>
				<!--end header-top-->

				<!--banner-->
				<div class="banner"></div>

				<!--login-->
				<div id="login">
					<div class="login-wrap">
						<form class="login-input form-group">
							<span><input type="text" placeholder="帐号" class="form-control name"></span>
							<span><input type="text" placeholder="密码" class="form-control password"></span>
							<span><input type="text" placeholder="验证码" class="form-control key"></span>
							<a class="login-btn btn-submit" href="index_login.php">登入</a>
						</form>
						<div class="login-btn-wrap">
							<ul>
								<li><a href="#" class="login-btn btn-joinus">忘记密码</a></li> |
								<li><a href="#" class="getPW">加入会员</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--end login-->

				<!--lang-wrap -->
				<div id="lang-wrap" class="lang-wrap">
					<div class="langTitle">
						<a href="#" class="flag02">简体中文</a>
					</div>
					<div id="langOption" style="display: none;">
						<a href="#" class="zh-tw flag01">繁體中文</a>
						<a href="#" class="zh-tw flag02">简体中文</a>
						<a href="#" class="en flag03">ENGLISH</a>
					</div>
				</div>
				<!--end lang-wrap -->
			</div>
		</div>
		<!--end page-header-->
		<div id="page-container">
			<div class="page-wrap">
				<!--live-->
				<div class="live-wrap">
					<?php include "../template/live/index.php"; ?>
				</div>
				<!--end live -->
			</div>
		</div>
		<!--end page-container-->
		
		<!--page-footer-->
		<div id="page-footer">
			<div class="page-wrap">
				<div class="footer-left">
					<div class="footer-nav">
						<ul>
							<li><a href="about.php">关于我们</a></li>
							<li><a href="#">联系我们</a></li>
							<li><a href="#">合作伙伴</a></li>
							<li><a href="#">存款帮助</a></li>
							<li><a href="#">取款帮助</a></li>
							<li><a href="#">常见问题</a></li>
							<li><a href="#">责任博彩</a></li>
						</ul>
					</div>
					<!--end footer-nav-->
					<div class="footer-pay">提供多种且快速的付款方式<img src="image/footer_img01.png" /></div>
				</div>
				<div class="footer-mobile"><a href="#"><img src="image/footer_img02.png" /></a></div>
			</div>
			<div class="footer-info"></div>
			<div class="footer-bottom">
				<div class="page-wrap">
					<div class="footer-copyright">COPYRIGHT &copy; BBIN RESERVED</div>
					<div class="footer-logo">
						<a href="#"><img src="image/bbinlogo.png" /></a>
						<a href="#"><img src="image/ublogo.png" /></a>
					</div>
				</div>
			</div>
		</div>
		<!--end page-footer-->
	</div>
	<!--end mainBody -->

<?php include '../template/base.php'; ?>
<script src="../js/dropmenu.js"></script>
</body>
</html>