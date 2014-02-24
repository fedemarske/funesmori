<?php

class DbController extends Controller
{

	public function actionIndex()
	{
    	$model=new Noticias();
        $datos=$model->getNoticias();
		$this->render('index',compact("datos"));
	}
    
    public function actionAdd()
	{
    	$model=new Noticias();
        
        if(isset($_POST["Noticias"]))
        {
            $model->attributes=$_POST['Noticias'];
            if($model->validate())
            {
               $guardar=$model->insert();
               if($guardar)
               {
                    Yii::app()->user->setFlash('mensaje','El registro se ha creado exitosamente');
                $this->redirect(Yii::app()->request->baseUrl."/db");
               }else
               {
                Yii::app()->user->setFlash('mensaje','Se ha producido un error, por favor intente más tarde');
                $this->refresh();
               }
            }
        }
        
		$this->render('add',compact("model"));
	}


	
}