<?php
class Noticias extends CActiveRecord
{
   	
    private $connection;
    public $titulo;
    public $detalle;
    public $fecha;
    
    public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
   
    public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    
 }