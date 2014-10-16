<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#manual"><i class="icon-chevron-right"></i> 手册</a></li>
          <li><a href="#blog"><i class="icon-chevron-right"></i> 博客</a></li>
          <li><a href="#warehouse"><i class="icon-chevron-right"></i> 资料站</a></li>
          <li><a href="#news"><i class="icon-chevron-right"></i> IT新闻</a></li>
          <li><a href="#ourstory"><i class="icon-chevron-right"></i> 程序员那些事</a></li>
        </ul>
      </div>
      <div class="span9">
		<section id="manual">
	          <div class="page-header">
	            <h1>手册</h1>
	          </div>
	
	          <h3>添加描述信息</h3>
	          
	          <div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
				  <ul class="nav nav-tabs">
				    <li class="active"><a href="#qianduan" data-toggle="tab">前端技术</a></li>
				    <li><a href="#shujuku" data-toggle="tab">数据库</a></li>
				  </ul>
				  <div class="tab-content">
				    <div class="tab-pane active" id="qianduan">
				    	<table class="table">
				    	  <thead>
			                <tr>
			                  <th>站名</th>
			                  <th>描述</th>
			                  <th>类型</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <td><a href="http://www.w3school.com.cn/html/" target="_blank">HTML 教程</a></td>
			                  <td>一个HTML教程（速查）手册</td>
			                  <td>类型1</td>
			                </tr>
			                <tr>
			                  <td><a href="http://www.w3school.com.cn/css/">CSS 教程</a></td>
			                  <td>一个CSS教程（速查）手册</td>
			                  <td>类型1</td>
			                </tr>
			                <tr>
			                  <td><a href="http://www.w3school.com.cn/css3/index.asp">CSS3 教程</a></td>
			                  <td>一个CSS3教程（速查）手册</td>
			                  <td>类型1</td>
			                </tr>
			              </tbody>
						</table>
				    </div>
				    <div class="tab-pane" id="shujuku">
				    </div>
				  </div>
				</div>
	
	        </section>
		</div>
    </div>
