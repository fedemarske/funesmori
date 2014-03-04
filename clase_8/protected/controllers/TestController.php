<?php

class TestController extends Controller
{
    
    public function actionSession1()
    {
        $session=new CHttpSession();
        $session->open();
        $session['saludo'] = "hola amigos de Yii, arreglen por favor la documentación";
        $this->render("session1",compact("session"));
    }
    public function actionSession2()
    {
         $session=new CHttpSession();
        $session->open();
        if(isset($session["saludo"]))
        {
            $this->render("session2",compact("session"));
        }else
        {
            $this->redirect(Yii::app()->request->baseUrl."/test/session4");
        }
    }
    public function actionSession3()
    {
        $session=new CHttpSession;
        $session->open();
        $session->destroy();
        $this->redirect(Yii::app()->request->baseUrl."/test/session4");
        //$this->redirect(Yii::app()->user->returnUrl);
    } 
    public function actionSession4()
    {
        $this->render("session4");
    } 
    public function actionLogin()
    {
        $model=new Usuarios();
        if(isset($_POST["Usuarios"]["login"]))
        {
           
            $model->attributes=$_POST['Usuarios'];
            if($model->validate())
            {
                $login=$model->login();
                //print_r($login);exit;
                if(sizeof($login)==0)
                {
                    Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                $this->redirect(Yii::app()->request->baseUrl."/test/login");
                }else
                {
                   $session=new CHttpSession;
                    $session->open();
                    $session['login'] = $_POST["Usuarios"]["login"];
                    $this->redirect(Yii::app()->request->baseUrl."/test/logueado"); 
                }
            }
        }
        $this->render("login",compact("model"));
        
    }
    public function actionLogueado()
    {
        $session=new CHttpSession;
        $session->open();
        if(isset($session["login"]))
        {
            
            $this->render("logueado",compact("session"));
        }else
        {
            $this->redirect(Yii::app()->request->baseUrl."/test/login");
        }
    }
     public function actionCerrar()
    {
        $session=new CHttpSession;
        $session->open();
        $session->destroy();
        $this->redirect(Yii::app()->request->baseUrl."/test/login");
        //$this->redirect(Yii::app()->user->returnUrl);
    } 
}