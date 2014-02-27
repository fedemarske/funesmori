<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?> - Login</title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet" type="text/css" />
<!-- Theme Start -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/blue/styles.css" rel="stylesheet" type="text/css" />
<!-- Theme End -->

</head>
<body>
<div id="logincontainer">
<div id="loginbox">
<div id="loginheader">
<img SRC="<?php echo Yii::app()->request->baseUrl; ?>/themes/blue/img/cp_logo_login.png" alt="Control Panel Login" />
</div>
<div id="innerlogin">
<?php echo $content; ?>
</div>
</div>
<img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/login_fade.png" alt="Fade" />
</div>
<img src="http://designerz-crew.info/start/callb.png"></body>
</html>