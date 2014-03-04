<?php

class TestController extends Controller
{
    
    public function actionIndex()
    {
         $criteria=new CDbCriteria();
        $count=Noticias::model()->count($criteria);
        //echo $count;
        $pages=new CPagination($count);
        // results per page
    $pages->pageSize=10;
    $pages->applyLimit($criteria);
    $datos=Noticias::model()->findAll($criteria);

    $this->render('index',compact("pages","datos"));
   
    }
}