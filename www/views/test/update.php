<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="col-md-12">
    <h2><?= $this->title ?></h2>
    <?php if (\Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= \Yii::$app->session->getFlash('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (\Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= \Yii::$app->session->getFlash('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php $form = ActiveForm::begin([
        'id' => 'my-form',
        'options' => [
            'class' => 'form-horizontal',
        ],
        'fieldConfig' => [
            'template' => "{label}\n
                <div class='col-md-5'>{input}</div> \n
                <div class='col-md-5'>{error}</div>",
            'labelOptions' => ['class' => 'col-md-2 control-label'],
        ],
    ]) ?>

    <?= $form->field($country, 'name'); ?>
    <?= $form->field($country, 'population'); ?>
    <?= $form->field($country, 'status')->checkbox(); ?>

    <div class="form-group">
        <div class="col-md-5 col-md-offset-2">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>