<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div >
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('type'=>'text','class'=>"form-control","style"=>"width: 50%;")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('type'=>'password','class'=>"form-control","style"=>"width: 50%;")); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
                    Hint: You may login with <span class="label label-primary">demo</span><span class="label label-primary">demo</span>
                    or <span class="label label-primary">admin</span><span class="label label-primary">admin</span>.
		</p>
	</div>

	<div >
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div>
		<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
