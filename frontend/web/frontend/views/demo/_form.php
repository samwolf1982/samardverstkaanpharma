<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Demo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="demo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'test1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test6')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
