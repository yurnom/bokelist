<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/docs.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/my.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<style>
	@media (min-width: 1200px) {
		.mynavbar-fixed-top .container {
			width: 1170px;
		}
	}
	@media (min-width: 768px) and (max-width: 979px) {
		.mynavbar-fixed-top .container {
			width: 1170px;
		}
	}
	</style>
	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body data-spy="scroll" data-target=".myroll">

<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>聚博客</h1>
    <p class="lead">优质IT博客的聚集地</p>
  </div>
</header>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target="#yii_bootstrap_collapse_0">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" style="color: #ffffff">聚博客</a>
			<div class="nav-collapse" id="yii_bootstrap_collapse_0">
				<ul id="yw0" class="nav">
					<li class="active"><a href="site/index">首页</a></li>
					<li><a href="#">思维导图计划</a></li>
					<li><a href="/site/about">关于本站</a></li>
					<li><a href="#">意见反馈</a></li>
				</ul>
				<form class="navbar-search pull-left" action="">
					<input type="text" class="search-query span2" placeholder="Search..">
				</form>
				<ul class="pull-right nav" id="yw1">
					<li><a href="/site/addurl">提交网站</a></li>
					<li><a href="#">注册</a></li>
					<li><a href="#">登录</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="navbar mynavbar-fixed-top myroll">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target="#yii_bootstrap_collapse_2">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="nav-collapse" id="yii_bootstrap_collapse_2">
				<ul id="yw50" class="nav">
					<li><a href="#tbAll">综合</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">编程语言 <span class="caret"></span></a>
						<ul id="yw51" class="dropdown-menu">
							<li class="nav-header">JVM平台</li>
							<li><a tabindex="-1" href="#tbLanguage" sendTo="stJava">Java</a></li>
							<li><a tabindex="-1" href="#tbLanguage" sendTo="stScala">Scala</a></li>
							<li><a tabindex="-1" href="#tbLanguage" sendTo="stClojure">Clojure</a></li>
							<li class="divider"></li>
							<li><a tabindex="-1" href="#tbLanguage">C/C++</a></li>
							<li><a tabindex="-1" href="#tbLanguage">C#</a></li>
							<li class="divider"></li>
							<li class="nav-header">其它</li>
							<li><a tabindex="-1" href="#tbLanguage">Php</a></li>
							<li><a tabindex="-1" href="#tbLanguage">Python</a></li>
							<li><a tabindex="-1" href="#tbLanguage">NodeJs</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">大数据 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbBigData" sendTo="stHadoop">Hadoop生态圈</a></li>
							<li><a tabindex="-1" href="#tbBigData" sendTo="stSpark">Spark</a></li>
							<li><a tabindex="-1" href="#tbBigData" sendTo="stStorm">Storm</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">算法相关 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbAlgorithm" sendTo="stDM">数据挖掘</a></li>
							<li><a tabindex="-1" href="#tbAlgorithm" sendTo="stML">机器学习</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">数据库技术 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbDatabase" sendTo="stNoSql">NoSql</a></li>
							<li class="nav-header">Sql</li>
							<li><a tabindex="-1" href="#tbDatabase" sendTo="stMysql">Mysql</a></li>
							<li><a tabindex="-1" href="#tbDatabase" sendTo="stOracle">Oracle</a></li>
						</ul>
					</li>
					<!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">游戏开发 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbCocos2d">Cocos2d-X</a></li>
							<li><a tabindex="-1" href="#tbU3D">U3D</a></li>
						</ul>
					</li> -->
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">移动开发 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbMobile" sendTo="stiOS">iOS</a></li>
							<li><a tabindex="-1" href="#tbMobile" sendTo="stAndroid">Android</a></li>
						</ul>
					</li>
					<li><a href="#tbFront">前端</a></li>
					<li><a href="#tbArchitecture">架构</a></li>
					<li><a href="#tbLinux">Linux</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">其它 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbOther">可视化</a></li>
							<li><a tabindex="-1" href="#tbOther">SAS</a></li>
						</ul>
					</li>
				</ul>
				<ul class="pull-right nav">
<!-- 					<li><a href="#tbNew">IT新闻</a></li> -->
<!-- 					<li><a href="#tbOurstory">程序员那些事</a></li> -->
					<li><a href="#tbTool">常用工具</a></li>
					<li><a href="#tbManual">速查手册</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container" id="page">
	<?php echo $content; ?>
	
	<div class="clear"></div>

</div><!-- page -->
<footer class="footer">
	<div class="container">
		Copyright &copy; <?php echo date('Y'); ?> by BokeList.com.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>
</footer><!-- footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->baseUrl; ?>/js/application.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/stickUp.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/my.js"></script>
</body>
</html>
