<?php

class DbController extends Controller
{

	public function actionIndex()
	{
    	$model=new Noticias();
        $datos=$model->getNoticias();
		$this->render('index',compact("datos"));
	}

	
}