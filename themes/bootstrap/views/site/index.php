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
			<div class="row-fluid">
			  <div class="span6">
			  	<table class="table table-striped">
				  	<tbody>
		                <tr>
		                  <td><a href="http://coolshell.cn/" target="_blank">Coolshell</a></td>
		                  <td>互联网大牛陈皓的个人博客，技术向</td>
		                </tr>
		                <tr>
		                  <td><a href="http://www.ruanyifeng.com/blog/" target="_blank">阮一峰的网络日志</a></td>
		                  <td>Js+各种杂项</td>
		                </tr>
		                <tr>
		                  <td><a href="http://mindhacks.cn/" target="_blank">Mind Hacks</a></td>
		                  <td>偏机器学习、算法和数学</td>
		                </tr>
		               
	                </tbody>
				</table>
			  </div>
			  <div class="span6">
				  <table class="table table-striped">
					  	<tbody>
			                <tr>
			                  <td><a href="http://www.nowamagic.net/" target="_blank">简明现代魔法</a></td>
			                  <td>互联网资讯分享，娱乐向</td>
			                </tr>
			                <tr>
			                  <td><a href="http://blog.jobbole.com/" target="_blank">伯乐在线</a></td>
			                  <td>分享博文、资讯的好地方</td>
			                </tr>
		                </tbody>
					</table>
			  	
			  </div>
			</div>
		</section>
        
        <section id="tbJvm">
			<div class="page-header"><h1>编程语言 </h1></div>
			<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbJava"><a href="#tabJava" data-toggle="tab">Java</a></li>
			    <li id="tbScala"><a href="#tabScala" data-toggle="tab">Scala</a></li>
			    <li id="tbClojure"><a href="#tabClojure" data-toggle="tab">Clojure</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabJava">
			    	<div class="row-fluid">
					  <div class="span6">
					  	<table class="table table-striped">
						  	<tbody>
				                <tr>
				                  <td><a href="http://selfup.cn/" target="_blank">程序员的自我修养</a></td>
				                  <td>Java+大数据+初级机器学习</td>
				                </tr>
				                <tr>
				                  <td><a href="http://ifeve.com/" target="_blank">并发编程网</a></td>
				                  <td>专注Java的分享平台</td>
				                </tr>
				                <tr>
				                  <td><a href="http://blog.hesey.net/" target="_blank">舒の随想日记</a></td>
				                  <td>Java，技术向</td>
				                </tr>
				                <tr>
				                  <td><a href="http://www.liaoxuefeng.com/" target="_blank">廖雪峰的官方网站</a></td>
				                  <td>Git、Python</td>
				                </tr>
				               
			                </tbody>
						</table>
					  </div>
					  <div class="span6">
						  <table class="table table-striped">
							  	<tbody>
					                <tr>
					                  <td><a href="http://jade.is-programmer.com/" target="_blank">温其如玉</a></td>
					                </tr>
					                <tr>
					                  <td><a href="http://blog.jeoygin.org/" target="_blank">尘嚣之外</a></td>
					                </tr>
					                <tr>
					                  <td><a href="http://kenwublog.com/" target="_blank">Ken Wu's Blog</a></td>
					                </tr>
				                </tbody>
							</table>
					  	
					  </div>
					</div>
			    </div>
			    <div class="tab-pane" id="tabScala">
			    </div>
			    <div class="tab-pane" id="tabClojure">
			    </div>
			  </div>
			</div>
        </section>
        <section id="tbDatamining">
			<div class="page-header"><h1>数据挖掘 <small>数据之美</small></h1></div>
			<div class="row-fluid">
			  <div class="span6">
			  	<table class="table table-striped">
				  	<tbody>
		                <tr>
		                  <td><a href="http://www.matrix67.com/blog/" target="_blank">Matrix67: The Aha Moments</a></td>
		                  <td>数学游戏+智力题+奇怪的东西</td>
		                </tr>
		                <tr><td><a href="http://www.bjt.name/" target="_blank">刘思喆@贝吉塔行星</a></td><td>R语言</td></tr>
	                </tbody>
				</table>
			  </div>
			  <div class="span3">
				  <table class="table table-striped">
					  	<tbody>
			                <tr><td><a href="http://blog.csdn.net/abcjennifer" target="_blank">Rachel Zhang的专栏</a></td></tr>
			                <tr><td><a href="http://1.guzili.sinaapp.com/" target="_blank">谷子粒</a></td></tr>
		                </tbody>
					</table>
			  </div>
			  <div class="span3">
				  <table class="table table-striped">
					  	<tbody>
			                <tr><td><a href="http://cos.name/" target="_blank">统计之都</a></td></tr>
		                </tbody>
					</table>
			  </div>
			</div>
		</section>
		<section id="tbBigdata">
			<div class="page-header"><h1>大数据 <small>Hadoop+Spark+Storm+...</small></h1></div>
			<div class="row-fluid">
			  <div class="span4">
			  	<table class="table table-striped">
				  	<tbody>
		                <tr><td><a href="http://fleurer-lee.com/" target="_blank">初心</a></td><td></td></tr>
		                <tr><td><a href="http://blog.fens.me/" target="_blank">粉丝日志</a></td><td><span class="label label-important">更新</span></td></tr>
		                <tr><td><a href="http://www.parallellabs.com/" target="_blank">并行实验室</a></td><td></td></tr>
	                </tbody>
				</table>
			  </div>
			  <div class="span4">
				  <table class="table table-striped">
					  	<tbody>
			                <tr><td><a href="http://www.geedoo.info/" target="_blank">极豆技术博客</a></td><td></td></tr>
			                <tr><td><a href="http://dongxicheng.org/" target="_blank">董的博客</a></td><td><span class="label label-success">推荐</span></td></tr>
			                <tr><td><a href="http://shiyanjun.cn/" target="_blank">简单之美</a></td><td></td></tr>
		                </tbody>
					</table>
			  </div>
			  <div class="span4">
				  <table class="table table-striped">
					  	<tbody>
			                <tr><td><a href="http://xumingming.sinaapp.com/" target="_blank">徐明明</a></td><td></td></tr>
			                <tr><td><a href="http://www.rigongyizu.com/" target="_blank">日拱一卒</a></td><td></td></tr>
			                <tr><td><a href="http://www.flyne.org/" target="_blank">flyne</a></td><td></td></tr>
		                </tbody>
					</table>
			  </div>
			</div>
		</section>
    </div>
    </div>
    <div class="span3">
      <!--Sidebar content-->
    </div>
  </div>
</div>