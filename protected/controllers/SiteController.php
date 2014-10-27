<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$java = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>2));
		$iOS = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>17));
		$android = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>18));
		$all = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 24",array("catogry_id"=>1));
		
		$hadoop = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>19));
		$spark = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>21));
		$storm = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>22));
		
		$DM = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>3));
		$ML = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>6));
		
		$mongodb = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>23));
		$mysql = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>24));
		$oracle = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>25));
		$cocos2d = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>27));
		$u3d = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>28));
		
		$html5 = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>32));
		$javascript = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>33));
		$css = Item::model()->findAll("catogry_id=:catogry_id and STATUS='有效' order by rank desc limit 0, 18",array("catogry_id"=>34));
		
		$this->render('index',array(
				'java'=>$java,
				'iOS'=>$iOS,
				'android'=>$android,
				'all'=>$all,
				'hadoop'=>$hadoop,
				'spark'=>$spark,
				'storm'=>$storm,
				'DM'=>$DM,
				'ML'=>$ML,
				'mongodb'=>$mongodb,
				'mysql'=>$mysql,
				'oracle'=>$oracle,
				'cocos2d'=>$cocos2d,
				'u3d'=>$u3d,
				'html5'=>$html5,
				'javascript'=>$javascript,
				'css'=>$css,
		)); 
	}
	
	public function actionAbout() {
		$this->layout='//layouts/main_other';
		$this->render('about');
	}
	
	public function actionAddurl() {
		$this->layout='//layouts/main_other';
		
		$model=new Item;
		
		// Uncomment the following line if AJAX validation is needed
// 		$this->performAjaxValidation($model);
		
		if(isset($_POST['Item']))
		{
			$model->attributes=$_POST['Item'];
			$model->STATUS = "审核";
			if($model->save())
				$this->render('addurl', array('model'=>$model,'info'=>"添加成功！"));
		}
		
		$this->render('addurl',array(
				'model'=>$model,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}