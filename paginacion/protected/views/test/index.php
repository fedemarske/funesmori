<h1>Paginación con Yii</h1>
<ul>
<?php 
foreach($datos as $dato)
{
?>
   <li><?php echo $dato["id"]?> - <?php echo $dato["titulo"]?></li>
<?php 
}
?>
</ul>

<?php 
$this->widget
(
    'CLinkPager', 
    array
    (
        'pages' => $pages,
    )
)
 ?>