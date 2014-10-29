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
		    	<?php
				    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$all,'columns'=>4));
				    $this->endWidget();
				?>
		</section>
        <section id="tbLanguage">
			<div class="page-header"><h1 align="right"><small>Hello World</small> 编程语言</h1></div>
			<div class="tabbable tabs-left">
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#tabJava" data-toggle="tab" getFrom="stJava">Java</a></li>
			    <li><a href="#tabScala" data-toggle="tab" getFrom="stScala">Scala</a></li>
			    <li><a href="#tabClojure" data-toggle="tab" getFrom="stClojure">Clojure</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabJava">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$java,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabScala">
			    </div>
			    <div class="tab-pane" id="tabClojure">
			    </div>
			  </div>
			</div>
        </section>
		<section id="tbBigData">
			<div class="page-header"><h1>大数据 <small>Hadoop+Spark+Storm+...</small></h1></div>
			<div class="tabbable tabs-right"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#tabHadoop" data-toggle="tab">Hadoop生态圈</a></li>
			    <li><a href="#tabSpark" data-toggle="tab" getFrom="stSpark">Spark</a></li>
			    <li><a href="#tabStorm" data-toggle="tab" getFrom="stStorm">Storm</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabHadoop">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$hadoop,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabSpark">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$spark,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabStorm">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$storm,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			  </div>
			</div>
		</section>
		<section id="tbAlgorithm">
			<div class="page-header"><h1 align="right"><small>体会算法之美</small> 算法相关</h1></div>
			<div class="tabbable tabs-left">
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#tabDM" data-toggle="tab" getFrom="stDM">数据挖掘</a></li>
			    <li><a href="#tabML" data-toggle="tab" getFrom="stML">机器学习</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabDM">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$DM,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabML">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$ML,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			  </div>
			</div>
		</section>
	    <section id="tbDatabase">
			<div class="page-header"><h1>数据库技术 <small>Sql & NoSql</small></h1></div>
			<div class="tabbable tabs-right"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#tabNoSql" data-toggle="tab" getFrom="stNoSql">NoSql</a></li>
			    <li><a href="#tabMysql" data-toggle="tab" getFrom="stMysql">Mysql</a></li>
			    <li><a href="#tabOracle" data-toggle="tab" getFrom="stOracle">Oracle</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabNoSql">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$nosql,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabMysql">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$mysql,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabOracle">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$oracle,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			  </div>
			</div>
		</section>
		<!-- <section>
			<div class="page-header"><h1 align="right"><small></small> 游戏开发</h1></div>
			<div class="tabbable tabs-left">
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbCocos2d"><a href="#tabCocos2d" data-toggle="tab">Cocos2d-X</a></li>
			    <li id="tbU3D"><a href="#tabU3D" data-toggle="tab">U3D</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabCocos2d">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$cocos2d,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabAndroid">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$u3d,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			  </div>
			</div>
        </section> -->
		<section id="tbMobile">
			<div class="page-header"><h1 align="right"><small>互联网时代</small> 移动开发</h1></div>
			<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#tabiOS" data-toggle="tab" getFrom="stiOS">iOS</a></li>
			    <li><a href="#tabAndroid" data-toggle="tab" getFrom="stAndroid">Android</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabiOS">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$iOS,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabAndroid">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$android,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			  </div>
			</div>
        </section>
        <section id="tbFront">
			<div class="page-header"><h1>前端 <small>Javascript+Css+HTML</small></h1></div>
			<?php
			    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$front,'columns'=>4));
			    $this->endWidget();
			?>
		</section>
		<section id="tbArchitecture">
			<div class="page-header"><h1 align="right"><small></small> 架构</h1></div>
			<?php
			    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$architecture,'columns'=>4));
			    $this->endWidget();
			?>
		</section>
		<section id="tbLinux">
			<div class="page-header"><h1>Linux <small></small></h1></div>
			<?php
			    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$linux,'columns'=>4));
			    $this->endWidget();
			?>
		</section>
		<br>
        <hr style="border-top:1px dashed #00adef;">
        <section id="tbTool">
        	<div class="page-header"><h1>常用工具 <small>开发人员在线工具</small></h1></div>
        	<table class="table table-bordered table-hover">
        		<tbody>
        			<?php foreach($tool as $item) {?>
        			<tr>
        				<td><a href="<?php echo $item->link?>" target="_blank"><?php echo $item->name?></a></td>
        				<td><?php echo $item->DESCRIPTION?></td>
        			</tr>
        			<?php }?>
        		</tbody>
        	</table>
        </section>
        <section id="tbManual">
        	<div class="page-header"><h1>速查手册 <small>各种教程、各种手册</small></h1></div>
        	<table class="table table-bordered table-hover">
        		<tbody>
        			<?php foreach($manual as $item) {?>
        			<tr>
        				<td><a href="<?php echo $item->link?>" target="_blank"><?php echo $item->name?></a></td>
        				<td><?php echo $item->DESCRIPTION?></td>
        			</tr>
        			<?php }?>
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