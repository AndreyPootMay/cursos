<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>        
    </div>

    <div class="row">
        <?= $form->field($model, 'course_details')->textArea(['maxlength' => true, 'rows' => 6]) ?>
    </div>

    <div class="row">
        <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="row">
        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
