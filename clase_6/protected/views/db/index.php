<h1>Listado de Noticias ( para correr desnudos por la casa )</h1>
<p>
<?php echo CHtml::link("Agregar",Yii::app()->request->baseUrl."/db/add",array("title"=>"Agregar","id"=>"enlace"));?>
</p>


<?php 
if(Yii::app()->user->hasFlash('mensaje'))
{
    ?>
    <h3 style="color: green;"><?php echo Yii::app()->user->getFlash('mensaje')?></h3>
    <?php    
} ?>

<ul>
    <?php
    foreach($datos as $dato)
    {
        ?>
        <li><?php echo $dato["titulo"]?></li>
        <?php        
    }
    ?>
</ul>