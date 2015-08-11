<?php
/* @var $this VideojuegoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Videojuegos',
);

$this->menu=array(
	array('label'=>'Create Videojuego', 'url'=>array('create')),
	array('label'=>'Manage Videojuego', 'url'=>array('admin')),
);
?>

<script type="text/javascript">
    window.onload = setupRefresh;

    function setupRefresh() {
      setTimeout("refreshPage();", 30000); // milliseconds
    }
    function refreshPage() {
       window.location = location.href;
    }
  </script> 

<h1>Videojuegos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'enablePagination'=>false,

        'enableSorting' =>1,
        'sortableAttributes'=>array(
            'Al azar',
        ),
)); ?>
