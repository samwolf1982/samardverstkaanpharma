<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DemoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="demo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'test1') ?>

    <?= $form->field($model, 'test2') ?>

    <?= $form->field($model, 'test3') ?>

    <?= $form->field($model, 'test4') ?>

    <?php // echo $form->field($model, 'test5') ?>

    <?php // echo $form->field($model, 'test6') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
