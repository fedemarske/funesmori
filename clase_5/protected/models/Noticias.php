<?php
class Noticias extends CActiveRecord
{
    private $connection;
    
    public function __construct()
    {
        //Yii::app()->db->connectionString
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
    public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function getNoticias()
    {
        $sql="select id,titulo,descripcion,fecha,foto from noticias;";
        //$dataReader=$this->connection->createCommand($sql)->query();
        
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
}