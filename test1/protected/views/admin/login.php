
<?php 
if(Yii::app()->user->hasFlash('mensaje'))
{
    ?>
        <div class="status error"><?php echo Yii::app()->user->getFlash('mensaje')?></div>
     <?php    
} ?>

<div class="form">
<?php echo CHtml::beginForm('','post',array("id"=>"form","name"=>"form")); ?>
	<div>
		<p>Enter your username:</p>
		<?php echo CHtml::activeTextField($model,'username',array('type'=>'text','class'=>"logininput")); ?>
		<?php echo CHtml::error($model,'username'); ?>
	</div>

	<div>
		<p>Enter your password:</p>
		<?php echo CHtml::activePasswordField($model,'password',array('type'=>'password','class'=>"logininput")); ?>
		<?php echo CHtml::error($model,'password'); ?>
	</div>

	<div>
		<?php echo CHtml::submitButton('Login',array('class'=>'loginbtn')); ?>
	</div>

<?php echo CHtml::endForm(); ?>
</div><!-- form -->
