<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
$this->pageTitle=Yii::app()->name . ' - 提交网址';
?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9">
    <?php if(isset($info)) {?>
	    <div class="alert alert-success">
	    添加成功！！
	    </div>
    <?php }?>
    <div class="form-horizontal">
		<form id="item-form" action="/site/addurl" method="post">
		
			<div class="control-group">
				<label class="control-label" for="inputEmail">名称 <span class="required">*</span></label>
				<div class="controls">
					<input type="text" maxlength="150" name="Item[name]" id="Item_name" class="input-xlarge" placeholder="例如: 老王的博客">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">网址 <span class="required">*</span></label>
				<div class="controls">
					<input type="url" maxlength="150" name="Item[link]" id="Item_link" class="input-xlarge" placeholder="例如：http://bokelist.com">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">分类 <span class="required">*</span></label>
				<div class="controls">
					<input name="Item[CATOGRY_ID]" id="Item_CATOGRY_ID" type="text" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">简介</label>
				<div class="controls">
					<textarea cols="200" rows="5" name="Item[DESCRIPTION]" id="Item_DESCRIPTION" maxlength="300" class="input-xlarge"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input class="btn" name="yt0" type="submit" value="提交">
				</div>
			</div>
		</form>	
	</div><!-- form -->
    </div>
    <div class="span3">
      <!--Sidebar content-->
    </div>
  </div>
</div>
