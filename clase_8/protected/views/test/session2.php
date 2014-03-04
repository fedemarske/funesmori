<?php 
echo "sessión= ".$session["saludo"];
?>
<p><?php echo CHtml::link("Cerrar Sessión",Yii::app()->request->baseUrl."/test/session3",array("class"=>"link","title"=>"Cerrar Sessión"));?></p>