<?php $this->breadcrumbs=array(Yii::t('app', 'Клиенты')); ?>

<h3><?php echo Yii::t('app', 'Клиенты'); ?></h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>