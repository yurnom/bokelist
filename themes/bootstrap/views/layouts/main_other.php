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
					<li class="active"><a href="/site/index">首页</a></li>
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


<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

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
	$(".alert").alert()

	$(function(){
		$.scrollUp({
			animation: 'fade',
			scrollImg: { active: true, type: 'background' }
		});
	});
</script>
</body>
</html>
