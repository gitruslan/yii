<?php

class SiteController extends Controller
{
    public $errorMessage;
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
		$this->render('index');
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
     * Display articles page
     */
    public function actionArticles(){
        $this->render("articles");
    }
    /**
     * Display about us page
     */
    public function actionAbout(){
        $this->render("about");
    }
    /**
     * Display articles page
     */
    public function actionSitemap(){
        $this->render("sitemap");
    }

    public function actionPersonalCabinet(){
        if(!Yii::app()->user->getIsGuest())
            $this->render("p_cabinet");
        if( Yii::app()->request->getPost('login',false) &&
            Yii::app()->request->getPost('password',false)){
           $identy = new UserIdentity(Yii::app()->request->getPost('login',false),Yii::app()->request->getPost('password',false));
           if($identy->authenticate()){
               Yii::app()->user->login($identy);
               $this->render("p_cabinet");
           }else{
               $this->errorMessage = $identy->errorMessage;
           }
        }
        $this->render("p_cabinet_login",array('errorMessage',$this->errorMessage));
    }
    public function actionLogout(){
        if(!Yii::app()->user->getIsGuest())
            Yii::app()->user->logout();
        $this->redirect("/");
    }

}