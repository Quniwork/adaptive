<!DOCTYPE html>
<html class="first zh-cn">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Share core Javascript -->
    <script src="js/jquery.js"></script>
</head>
<body>
<div id="mainBody">
    <!-- page-header -->
    <div id="page-header">
        <div class="header-top clearfix">
            <!-- login -->
            <div id="vue-meminfo" class="login-wrap">
                <p class="login-unit login-unit-user">
                    <input name="username" type="text" class="login-input login-acc" placeholder="帐号">
                </p>
                <p class="login-unit login-unit-pwd">
                    <input name="passwd" type="passwd" class="login-input" placeholder="密码">
                </p>
                <p class="login-unit login-unit-chk">
                    <input name="rmNum" type="text" class="login-input login-placeholder" placeholder="验证码">
                </p>
                <a class="link-login" href="index_login.php">登入</a>
                <a class="link-join" href="#">注册</a>
                <a class="link-forgetpw" href="#">忘记密码</a>
            </div>
            <!-- end login -->
            <!-- lang -->
            <!-- inline -->
            <!-- <div class="ele-lang-wrap">
                <div class="ele-lang-group">
                    <a href="#" class="ele-lang-option flag01"></a>
                    <a href="#" class="ele-lang-option flag02 ele-lang-current"></a>
                    <a href="#" class="ele-lang-option flag03"></a>
                </div>
            </div> -->
            <!-- select -->
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
                <a href="index.php" id="ele-logo-img"></a>
            </div>
            <!-- mainnav -->
            <div class="mainnav-wrap">
                <ul class="mainnav clearfix" data-lsub-style="fade">
                    <!--
                    data-lsub-style="slide/fade" 初始設定slide
                    data-lsub-delay="100" 延遲
                    data-lsub-align="center/left" 初始設定center
                    data-lsub-y="100" x距離
                    data-lsub-x="100" y距離
                    -->
                    <li id="LS-first" class="LS-first"><a href="index.php" class="current"><span>首頁</span></a></li>
                    <li id="LS-ball" class="LS-ball"><a href="#"><span>体育赛事</span></a>
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
        </div>
        <!-- slideshow -->
        <div id="js-ele-slideshow" class="ele-slideshow-wrap">
            <div class="js-ele-slideshow-scroll ele-slideshow-scroll">
                <ul>
                    <li data-autoplaytime="5000">
                        <a href="#">
                            <div class="img" style="background-image: url('image/not-use/first_slider01.jpg');"></div>
                        </a>
                    </li>
                    <li data-autoplaytime="5000">
                        <a href="#">
                            <div class="img" style="background-image: url('image/not-use/first_slider02.jpg');"></div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="js-ele-slideshow-control-wrap ele-slideshow-control-wrap"></div>
        </div>
        <!-- end slideshow-->
    </div>
    <!-- end page-header -->
    <!-- page-container -->
    <div id="page-container">
        <div id="page-body">
            <div class="news-wrap">
                <div class="news-title"></div>
                <marquee id="ele-msgNews" class="msgNews" behavior="scroll" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    <a href="#">两岸三地最热门的机台游戏，结合4层Jackpot累积彩金玩法，移植到你的计算机里！在家就可以等待从天而降的彩金，你还在等什么？</a>
                </marquee>
            </div>
            <!-- end news -->
            <!-- fitst-game -->
            <div class="first-game-wrap clearfix">
                <a href="#" class="first-game first-game01"></a>
                <a href="#" class="first-game first-game02"></a>
                <a href="#" class="first-game first-game03"></a>
                <a href="#" class="first-game first-game04"></a>
            </div>
            <!-- end first-game -->
        </div>
    </div>
    <!-- page-container end -->
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
<!-- Share core Javascript -->
<script src="js/vue.js"></script>
<script src="js/vue-app.js"></script>
<script src="js/ele-common.js"></script>
<script src="js/ele-dropmenu.js"></script>
<script src="js/ele-obalance.js"></script>
<!-- Javascript for this template -->
<script src="js/TweenMax.min.js"></script>
<script src="js/tween.slideshow.js"></script>
<script>
    $('#js-ele-slideshow').slideshow({
        isNav: true,
        isArrow: true,
        isRunLine: true
    });
</script>
</body>
</html>