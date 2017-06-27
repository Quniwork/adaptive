<!DOCTYPE html>
<html class="ball zh-cn">
<head>
    <meta charset="UTF-8">
    <title>体育赛事</title>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Share core Javascript -->
    <script src="js/jquery.js"></script>
</head>
<body>
<div id="mainBody">
    <!-- page-header -->
    <div id="page-header">
        <div class="header-top clearfix">
            <!-- meminfo -->
            <div id="vue-meminfo" class="meminfo-wrap">
                <div class="mem-info">
                    <div class="ele-accinfo ele-acc-name"><span>帳號：</span><strong>{{account}}</strong></div>
                    <div class="ele-acc-unit">
                        <div id="_bbsportBalance" class="ele-accinfo ele-first-balance">
                            <span>BBIN餘額：</span>
                            <strong>{{total}}</strong>
                        </div>
                        <div id="js-ele-obalance-wrap" class="ele-obalance-wrap">
                            <div class="ele-accinfo ele-other-balance">
                                <i class="fa fa-plus-square"></i>
                            </div>
                        </div>
                        <div id="js-ele-obalance-item-wrap" class="ele-obalance-item-wrap">
                            <div class="ele-obalance-item">
                                <div class="ele-obalance" v-for="todo in todos">
                                    <span>{{todo.name}}</span>
                                    <strong>{{todo.balance}}</strong>
                                </div>
                            </div>
                            <div class="ele-balance-tool">
                                <a href="#">额度转换</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="SU-Menual clearfix">
                    <ul class="login-Menual">
                        <li><a href="#">會員中心</a></li>
                        <li><a href="#">線上存款</a></li>
                        <li> <a href="#">線上取款</a></li>
                        <li><a href="#">額度轉換</a></li>
                        <li><a href="index.php">登出</a></li>
                    </ul>
                </div>
            </div>
            <!-- end meminfo -->
            <!-- lang -->
            <div id="ele-lang-wrap" class="ele-lang-wrap">
                <div class="ele-lang-title">
                    <a href="#" class="flag02">简体中文</a>
                </div>
                <div id="ele-lang-group" class="ele-lang-group" style="display: none;">
                    <a href="#" class="ele-lang-option flag01">繁體中文</a>
                    <a href="#" class="ele-lang-option flag02 ele-lang-current">简体中文</a>
                    <a href="#" class="ele-lang-option flag03">ENGLISH</a>
                </div>
            </div>
            <!-- end lang -->
        </div>
        <div class="header-bottom clearfix">
            <div id="ele-logo-wrap" class="logo">
                <a href="#" id="ele-logo-img"></a>
            </div>
            <!-- mainnav -->
            <div class="mainnav-wrap">
                <ul class="mainnav clearfix" data-lsub-style="fade">
                    <li id="LS-first" class="LS-first"><a href="index.php"><span>首頁</span></a></li>
                    <li id="LS-ball" class="LS-ball"><a href="#" class="current"><span>体育赛事</span></a>
                        <div id="nav-ball" class="ele-drop-group" style="display:none">
                            <div class="lsub-inner-wrap">
                                <a v-for="todo in todos" :href="todo.link">{{todo.name}}</a>
                            </div>
                        </div>
                    </li>
                    <li id="LS-live" class="LS-live"><a href="live.php"><span>视讯直播</span></a></li>
                    <li id="LS-game" class="LS-game"><a href="#"><span>电子游艺</span></a>
                        <div id="nav-game" class="ele-drop-group" style="display:none">
                            <div class="lsub-inner-wrap">
                                <a v-for="todo in todos" :href="todo.link">{{todo.name}}</a>
                            </div>
                        </div>
                    </li>
                    <li id="LS-lottery" class="LS-lottery"><a href="lottery.php"><span>彩票游戏</span></a></li>
                    <li id="LS-memberexclusiveii" class="LS-memberexclusiveii"><a href="promotions.php"><span>优惠活动</span></a></li>
                    <li id="LS-mobile" class="LS-mobile"><a href="#"><span>手机下注</span></a></li>
                    <li id="LS-service" class="LS-service"><a href="#"><span>在线客服</span></a></li>
                </ul>
            </div>
            <!-- end mainnav -->
            <!-- banner -->
        	<div class="banner-wrap"></div>
        	<!-- end banner -->
        </div>
    </div>
    <!-- end page-header -->
	<div id="page-container">
		<div id="page-body">
			<!--sports-->
			<div class="ball-wrap">
				<?php include "../template/sports/index.php"; ?>
			</div>
			<!--end sports -->
		</div>
	</div>
	<!--end page-container-->
	<!-- page-footer -->
	<div id="page-footer">
	    <div class="footer-info"></div>
	    <div class="article-menu">
	        <a href="about.php">关于我们</a>
	        <a href="#">联系我们</a>
	        <a href="#">合作伙伴</a>
	        <a href="#">存款帮助</a>
	        <a href="#">取款帮助</a>
	        <a href="#">常见问题</a>
	        <a href="#">责任博彩</a>
	    </div>
	    <div class="copyright">COPYRIGHT © BBIN RESERVED</div>
	    <a href="#" class="bblogo">
	        <img src="image/bbinlogo.png">
	    </a>
	    <a href="#" class="browser-logo">
	        <img src="image/ublogo.png">
	    </a>
	</div>
	<!-- end page-footer -->
</div>
<!--end mainBody -->
<!-- Share core Javascript -->
<script src="js/vue.js"></script>
<script src="js/vue-app.js"></script>
<script src="js/ele-common.js"></script>
<script src="js/ele-dropmenu.js"></script>
<script src="js/ele-obalance.js"></script>
</body>
</html>