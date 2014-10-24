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
			<div class="page-header"><h1>综合 <small>专注于互联网资讯与技术分享</small></h1></div>
			<table class="table table-hover">
			  	<tbody>
	                <tr>
	                  <td width="25%"><a href="http://coolshell.cn/" target="_blank">Coolshell</a> <span class="label label-success">推荐</span></td>
	                  <td width="25%"><a href="http://www.nowamagic.net/" target="_blank">简明现代魔法</a></td>
	                  <td width="25%"><a href="http://www.ruanyifeng.com/blog/" target="_blank">阮一峰的网络日志</a></td>
	                  <td width="25%"><a href="http://blog.jobbole.com/" target="_blank">伯乐在线</a></td>
	                </tr>
	                <tr>
	                  <td><a href="http://mindhacks.cn/" target="_blank">Mind Hacks</a></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
                </tbody>
			</table>
		</section>
        
        <section id="tbJvm">
			<div class="page-header"><h1 align="right"><small>Hello World</small> 编程语言</h1></div>
			<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbJava"><a href="#tabJava" data-toggle="tab">Java</a></li>
			    <li id="tbScala"><a href="#tabScala" data-toggle="tab">Scala</a></li>
			    <li id="tbClojure"><a href="#tabClojure" data-toggle="tab">Clojure</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabJava">
			    	<table class="table table-hover">
					  	<tbody>
					  		<tr>
							<?php 
								$i = 0;
								foreach($java as $item) { 
							?>
				                  <td width="34%"><a href="<?php echo $item->link ?>" target="_blank"><?php echo $item->name ?></a></td>
				            <?php 
				                	if($i%3 == 2) echo "</tr><tr>";
									$i++;
								} 
								$k = 0;
								if($i%3 == 1) $k = 2;
								else if($i%3 == 2) $k = 1;	
								for($j = 0; $j < $k; $j++) echo "<td></td>"
							?>
							</tr>
		                </tbody>
					</table>
			    </div>
			    <div class="tab-pane" id="tabScala">
			    </div>
			    <div class="tab-pane" id="tabClojure">
			    </div>
			  </div>
			</div>
        </section>
        <section id="tbDatamining">
			<div class="page-header"><h1>数据挖掘 <small>挖掘技术哪家强？</small></h1></div>
			<table class="table table-hover">
			  	<tbody>
	                <tr>
	                  <td width="25%"><a href="http://www.matrix67.com/blog/" target="_blank">Matrix67: The Aha Moments</a></td>
	                  <td><a href="http://cos.name/" target="_blank">统计之都</a></td>
	                  <td width="25%"><a href="http://blog.csdn.net/abcjennifer" target="_blank">Rachel Zhang的专栏</a></td>
	                  <td width="25%"><a href="http://1.guzili.sinaapp.com/" target="_blank">谷子粒</a></td>
	                </tr>
	                <tr>
	                  <td width="25%"><a href="http://www.bjt.name/" target="_blank">刘思喆@贝吉塔行星</a></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
                </tbody>
			</table>
		</section>
		<section id="tbBigdata">
			<div class="page-header"><h1 align="right"><small>Hadoop+Spark+Storm+...</small> 大数据</h1></div>
			<table class="table table-hover">
			  	<tbody>
	                <tr>
	                  <td><a href="http://fleurer-lee.com/" target="_blank">初心</a></td>
	                  <td><a href="http://blog.fens.me/" target="_blank">粉丝日志</a> <span class="label label-important">更新</span></td>
	                  <td><a href="http://www.parallellabs.com/" target="_blank">并行实验室</a></td>
	                  <td><a href="http://www.geedoo.info/" target="_blank">极豆技术博客</a></td>
	                </tr>
	                <tr>
	                  <td><a href="http://dongxicheng.org/" target="_blank">董的博客</a> <span class="label label-success">推荐</span></td>
	                  <td><a href="http://shiyanjun.cn/" target="_blank">简单之美</a></td>
	                  <td><a href="http://xumingming.sinaapp.com/" target="_blank">徐明明</a></td>
	                  <td><a href="http://www.rigongyizu.com/" target="_blank">日拱一卒</a></td>
	                </tr>
	                <tr>
	                  <td><a href="http://www.flyne.org/" target="_blank">flyne</a></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
                </tbody>
			</table>
		</section>
    </div>
    </div>
    <div class="span3">
      <!--Sidebar content-->
    </div>
  </div>
</div>