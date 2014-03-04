<?php
class AdminController extends Controller
{
	public function actionIndex()
	{
            $session=new CHttpSession;
            $session->open();
            if(isset($session["user"]))
            {
                $this->render("index",compact("session"));
            }else
            {
                $this->redirect(Yii::app()->request->baseUrl."/admin/login");
            }
        }
        
        public function actionLogin()
        {
            $this->layout= 'login';
            $model=new Users();

            // collect user input data
            if(isset($_POST['Users']))
            {
                    $model->attributes=$_POST['Users'];
                    // validate user input and redirect to the previous page if valid
                    if($model->validate())
                    {
                        $login=$model->login();
                        if(sizeof($login)==0)
                        {
                            Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                            $this->redirect(Yii::app()->request->baseUrl."/admin/login");
                        }
                        else
                        {
                            $session=new CHttpSession;
                            $session->open();
                            $session['user'] = $_POST["Users"]["username"];
                            $this->redirect(Yii::app()->request->baseUrl."/admin/index"); 
                        }
                    }                                 
            }
            // display the login form
            $this->render('login',array('model'=>$model));
        }
	
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
				$this->render('error', $error);
		}
	}
        
        public function actionLogout()
        {
            $session=new CHttpSession;
            $session->open();
            $session->destroy();
            $this->redirect(Yii::app()->request->baseUrl."/admin/login");
            //$this->redirect(Yii::app()->user->returnUrl);
        } 
}