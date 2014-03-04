<?php
class Usuarios extends CActiveRecord
{
   	
    private $connection;
    public $nombre;
    public $login;
    public $pass;
   

    
    public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
   
    public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function rules()
    {
        return array(
            array('login,pass', 'required'),
          
        );
    }
    
    public function login()
	{
		$user=Usuarios::model()->find('login=? and pass=?',array($this->login,sha1($this->pass)));
        return $user;
	}
    
    
    
}