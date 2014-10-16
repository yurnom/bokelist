<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9">
		<!--Body content-->
	<div class="site-index">
		<section id="tbAll">
			<div class="page-header"><h1>综合 <small>添加简介</small></h1></div>
			<h3>二级导航标题，没有可以去掉</h3>
			<p>添加导航，具体样式待定
        </section>
        
        <section id="tbJava">
			<div class="page-header"><h1>编程语言 <small>下面为子类展示方法1</small></h1></div>
			<h3>Java <small>添加简介</small></h3>
			<p>添加导航，具体样式待定
        </section>
        <section id="tbScala">
			<h3>Scala <small>添加简介</small></h3>
			<p>添加导航，具体样式待定
        </section>
        <section id="tbClojure">
			<h3>Clojure <small>添加简介</small></h3>
			<p>添加导航，具体样式待定
        </section>
        
        <section id="tbJava">
			<div class="page-header"><h1>移动开发 <small>下面为子类展示方法2</small></h1></div>
			<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#tab1" data-toggle="tab">Android</a></li>
			    <li><a href="#tab2" data-toggle="tab">iOS</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tab1">
			      <p>Android导航</p>
			    </div>
			    <div class="tab-pane" id="tab2">
			      <p>iOS导航</p>
			    </div>
			  </div>
			</div>
        </section>
        
    </div>
    </div>
    <div class="span3">
      <!--Sidebar content-->右侧边栏
    </div>
  </div>
</div>