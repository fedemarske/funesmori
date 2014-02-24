<!DOCTYPE HTML>
<html>

<head>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<div class="container" id="page">

	<div id="header">
            <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	</div><!-- header -->
        
	<div id="mainmenu">
            <nav class="navbar navbar-inverse" role="navigation">
              <div class="container-fluid">
		<?php $this->widget('zii.widgets.CMenu',array(
                        'htmlOptions'=>array("class"=>"nav navbar-nav"),
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
              </div>
             </nav>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        <div class="row">
          <div class="col-md-8"><?php echo $content; ?></div>
          <div class="col-md-4"></div>
        </div>

        <div id="footer" style="text-align: center;margin-top: 25px;">
		Copyright &copy; <?php echo date('Y'); ?> by Pungas<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

