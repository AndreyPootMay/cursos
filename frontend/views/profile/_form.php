<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>


<div class="row">
  <div class="col-md-4"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></div>
  <div class="col-md-4"><?= $form->field($model, 'public_email')->textInput(['maxlength' => true]) ?></div>
  <div class="col-md-4"></div>
</div>

<div class="row">
  <div class="col-md-6"><?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?></div>
  <div class="col-md-6"><?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?></div>
</div>


<div class="3">
    <?= $form->field($model, 'bio')->textarea(['rows' => 6]) ?>
</div>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
