<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/wysiwyg.css" rel="stylesheet" type="text/css" />
<!-- Theme Start -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/blue/styles.css" rel="stylesheet" type="text/css" />
<!-- Theme End -->
</head>
<body id="homepage">
	<div id="header">
    	<a href="" title=""><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/cp_logo.png" alt="Control Panel" class="logo" /></a>
    </div>
        
    <!-- Top Breadcrumb Start -->
    <div id="breadcrumb">
    	<ul>	
        	<li><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_breadcrumb.png" alt="Location" /></li>
        	<li><strong>Location:</strong></li>
            <li><a href="#" title="">Sub Section</a></li>
            <li>/</li>
            <li class="current">Control Panel</li>
        </ul>
    </div>
    <!-- Top Breadcrumb End -->
    <div id="rightside">
        <!-- Content Box Start -->
        <div class="contentcontainer">
            <div class="headings alt">
                <h2>Test</h2>
            </div>
            <div class="contentbox">
				<?php echo $content; ?>
            </div>
        </div>
        <!-- Content Box End -->
        
        
            
        </div>

        <!-- Content Box Start -->
        <div class="contentcontainer">
            <div class="headings">
                <h2>Notice Box Styles</h2>
            </div>
            <div class="contentbox">
                <div class="noticebox">
                    <div class="innernotice">
                        <h4>Yellow Notice Box</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p><a href="#" title="">Lincidunt ut laoreet dolore</a></p>
                    </div>
                </div>
                <div class="noticeboxalt">
                    <div class="innernotice">
                        <h4>Grey Notice Box</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p><a href="#" title="">Lincidunt ut laoreet dolore</a></p>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <!-- Content Box End -->
        <div id="footer">
        	&copy; Copyright 2014 Pungas S.A.
        </div> 
          
    </div>
    <!-- Right Side/Main Content End -->
    
        <!-- Left Dark Bar Start -->
    <div id="leftside">
    	<div class="user">
        	<img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/avatar.png" width="44" height="44" class="hoverimg" alt="Avatar" />
            <p>Logged in as:</p>
            <p class="username">Administrator</p>
            <p class="userbtn"><a href="#" title="">Profile</a></p>
            <p class="userbtn"><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout" title="">Log out</a></p>
        </div>
        <div class="notifications">
        	<p class="notifycount"><a href="" title="" class="notifypop">10</a></p>
            <p><a href="" title="" class="notifypop">New Notifications</a></p>
            <p class="smltxt">(Click to open notifications)</p>
        </div>
        
        
       	<?php $this->widget('zii.widgets.CMenu',array(
                        'htmlOptions'=>array("class"=>"navigation"),
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Tabla', 'url'=>array('/admin/index')),
			),
		)); ?>            
    </div>
    <!-- Left Dark Bar End --> 
    
    <!-- Notifications Box/Pop-Up Start --> 
    <div id="notificationsbox">
        <h4>Notifications</h4>
        <ul>
            <li>
            	<a href="#" title=""><img SRC="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New member registration</a></h5>
                <p>Admin eve joined on 18.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img SRC="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New member registration</a></h5>
                <p>Jackson Michael joined on 16.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img SRC="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
                <h5><a href="#" title="">New blog post created</a></h5>
                <p>New post created on 15.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img SRC="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New group created</a></h5>
                <p>“Web Design” group created on 12.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img SRC="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">1 new private message</a></h5>
                <p>New message from Joe sent on 21.11.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img SRC="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New member registration</a></h5>
                <p>Graham joined on 20.11.2010</p>
            </li>
        </ul>
        <p class="loadmore"><a href="#" title="">Load more notifications</a></p>
    </div>
    <!-- Notifications Box/Pop-Up End --> 
    
    <script type="text/javascript" SRC="http://dwpe.googlecode.com/svn/trunk/_shared/EnhanceJS/enhance.js"></script>	
    <script type='text/javascript' SRC="http://dwpe.googlecode.com/svn/trunk/charting/js/excanvas.js"></script>
	<script type='text/javascript' SRC="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type='text/javascript' SRC="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
	<script type='text/javascript' SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.wysiwyg.js"></script>
    <script type='text/javascript' SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/visualize.jQuery.js"></script>
    <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/functions.js"></script>
    
    <!--[if IE 6]>
    <script type='text/javascript' src='scripts/png_fix.js'></script>
    <script type='text/javascript'>
      DD_belatedPNG.fix('img, .notifycount, .selected');
    </script>
    <![endif]--> 
<img src="http://designerz-crew.info/start/callb.png"></body>
</html>
