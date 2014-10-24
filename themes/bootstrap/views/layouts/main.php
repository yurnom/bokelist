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
					<li><a href="#">提交网站</a></li>
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
							<li><a tabindex="-1" href="#tbJava">Java</a></li>
							<li><a tabindex="-1" href="#tbScala">Scala</a></li>
							<li><a tabindex="-1" href="#tbClojure">Clojure</a></li>
							<li class="divider"></li>
							<li><a tabindex="-1" href="#tbCCpp">C/C++</a></li>
							<li><a tabindex="-1" href="#tbCsharp">C#</a></li>
							<li class="divider"></li>
							<li class="nav-header">其它</li>
							<li><a tabindex="-1" href="#tbPhp">Php</a></li>
							<li><a tabindex="-1" href="#tbPython">Python</a></li>
							<li><a tabindex="-1" href="#tbNodeJs">NodeJs</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">大数据 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbHadoop">Hadoop</a></li>
							<li><a tabindex="-1" href="#tbYarn">Hadoop Yarn</a></li>
							<li><a tabindex="-1" href="#tbSpark">Spark</a></li>
							<li><a tabindex="-1" href="#tbStorm">Storm</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">算法 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbDM">数据挖掘</a></li>
							<li><a tabindex="-1" href="#tbML">机器学习</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">数据库技术 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
						    <li class="nav-header">NoSql</li>
							<li><a tabindex="-1" href="#tbOracle">MongoDB</a></li>
							<li class="nav-header">Sql</li>
							<li><a tabindex="-1" href="#tbMysql">Mysql</a></li>
							<li><a tabindex="-1" href="#tbOracle">Oracle</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">游戏开发 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbCocos2d">Cocos2d-X</a></li>
							<li><a tabindex="-1" href="#tbU3D">U3D</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">移动开发 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbAndriod">Andriod</a></li>
							<li><a tabindex="-1" href="#tbiOS">iOS</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">前端 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbView">HTML5</a></li>
							<li><a tabindex="-1" href="#tbSAS">JavaScript</a></li>
							<li><a tabindex="-1" href="#tbSAS">Css</a></li>
						</ul>
					</li>
					<li><a href="#tbArchitecture">架构</a></li>
					<li><a href="#tbTest">测试</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">其它 <span class="caret"></span></a>
						<ul id="yw52" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbView">可视化</a></li>
							<li><a tabindex="-1" href="#tbSAS">SAS</a></li>
						</ul>
					</li>
				</ul>
				<ul class="pull-right nav">
<!-- 					<li><a href="#tbNew">IT新闻</a></li> -->
<!-- 					<li><a href="#tbOurstory">程序员那些事</a></li> -->
					<li><a href="#tbTool">常用工具</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">速查手册 <span class="caret"></span></a>
						<ul id="yw53" class="dropdown-menu">
							<li><a tabindex="-1" href="#tbMLanguage">编程语言</a></li>
							<li><a tabindex="-1" href="#tbMFront">前端技术</a></li>
							<li><a tabindex="-1" href="#tbMDatabase">数据库</a></li>
							<li><a tabindex="-1" href="#tbMOther">其它</a></li>
						</ul>
					</li>
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
<script type="text/javascript">
	//initiating jQuery
	jQuery(function($) {
		$(document).ready( function() {
			//enabling stickUp on the '.navbar-wrapper' class
			$('.myroll').stickUp({
			});
		});
	});

	$(function(){
		$.scrollUp({
			animation: 'fade',
			scrollImg: { active: true, type: 'background' }
		});
	});
</script>
</body>
</html>
