<h1>Crear Nueva Noticia</h1>
<p>
<?php echo CHtml::link("Volver Atrás",Yii::app()->request->baseUrl."/db",array("title"=>"Volver Atrás","id"=>"enlace"));?>
</p>
<?php echo CHtml::beginForm('','post',array("name"=>"form","id"=>"form"));?>

<?php //echo CHtml::errorSummary($model); ?>
    <p>
        Indique el Título 
        <?php 
        echo CHtml::activeTextField($model,'titulo',array("id"=>"titulo","class"=>"campos"));
        echo CHtml::error($model,'titulo'); ?>
       <hr /> 
    </p>
     <p>
        Indique la Descripción 
        <?php 
        echo CHtml::activeTextArea($model,'des',array("id"=>"des","class"=>"campos","rows"=>"5","cols"=>"30"));
        echo CHtml::error($model,'des'); ?>
       <hr /> 
    </p>
    <p>
     <?php echo CHtml::submitButton('submit',array("class"=>"aer","value"=>"Enviar","title"=>"Enviar")); ?>
    </p>
    
    

<?php echo CHtml::endForm();?>