<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model humhub\modules\inventory\models\Categoria */

$this->title = 'Actualizar Categoria: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="panel-heading"><?= Html::encode($this->title) ?></div>
<div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
