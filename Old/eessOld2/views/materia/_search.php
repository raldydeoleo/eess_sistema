<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MateriaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_materia') ?>

    <?= $form->field($model, 'materia_nombre') ?>

    <?= $form->field($model, 'cantidad_credito') ?>

    <?= $form->field($model, 'hora_practica') ?>

    <?= $form->field($model, 'hora_teoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
