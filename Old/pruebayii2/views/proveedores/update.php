<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */

$this->title = 'Modificar Proveedor: ' . $model->id_proveedor;
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_proveedor, 'url' => ['view', 'id' => $model->id_proveedor]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="estudiantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
