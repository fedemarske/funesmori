<?php

class Users extends CActiveRecord
{
    private $connection;
    public $nombre;
    public $username;
    public $password;
    
    
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
            array('username,password', 'required'),
          
        );
    }
    
    public function login()
    {
            $user=users::model()->find('username=? and password=?',array($this->username,sha1($this->password)));
            return $user;
    }
    
    
}

