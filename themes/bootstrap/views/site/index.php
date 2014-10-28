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
      
		<section>
			<div class="page-header"><h1>大数据 <small>Hadoop+Spark+Storm+...</small></h1></div>
			<div class="tabbable tabs-right"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbHadoop"><a href="#tabHadoop" data-toggle="tab">Hadoop生态圈</a></li>
			    <li id="tbSpark"><a href="#tabSpark" data-toggle="tab">Spark</a></li>
			    <li id="tbStorm"><a href="#tabStorm" data-toggle="tab">Storm</a></li>
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
		  <section>
			<div class="page-header"><h1 align="right"><small>体会算法之美</small> 算法相关</h1></div>
			<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbDM"><a href="#tabDM" data-toggle="tab">数据挖掘</a></li>
			    <li id="tbML"><a href="#tabML" data-toggle="tab">机器学习</a></li>
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
	    <section>
			<div class="page-header"><h1>数据库技术 <small>Sql & NoSql</small></h1></div>
			<div class="tabbable tabs-right"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbNoSql"><a href="#tabNoSql" data-toggle="tab">NoSql</a></li>
			    <li id="tbMysql"><a href="#tabMysql" data-toggle="tab">Mysql</a></li>
			    <li id="tbOracle"><a href="#tabOracle" data-toggle="tab">Oracle</a></li>
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
		<section>
			<div class="page-header"><h1 align="right"><small>互联网时代</small> 移动开发</h1></div>
			<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbiOS"><a href="#tabiOS" data-toggle="tab">iOS</a></li>
			    <li id="tbAndroid"><a href="#tabAndroid" data-toggle="tab">Android</a></li>
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
        <section>
			<div class="page-header"><h1>前端 <small>Javascript+Css+HTML</small></h1></div>
			<div class="tabbable tabs-right"> <!-- Only required for left/right tabs -->
			  <ul class="nav nav-tabs">
			    <li class="active" id="tbHTML5"><a href="#tabHTML5" data-toggle="tab">HTML5</a></li>
			    <li id="tbJavaScript"><a href="#tabJavaScript" data-toggle="tab">JavaScript</a></li>
			    <li id="tbCss"><a href="#taCss" data-toggle="tab">Css</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="tabHTML5">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$html5,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabJavaScript">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$javascript,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			    <div class="tab-pane" id="tabCss">
			    	<?php
					    $this->beginWidget('ext.widget.ColumnWidget',array('data'=>$css,'columns'=>3));
					    $this->endWidget();
					?>
			    </div>
			  </div>
			</div>
		</section>
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