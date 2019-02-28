<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'E Center - Aprendizaje en línea';
?>
<div class="site-index">
  <div class="col-12 text-center">
    <img class="logo" src="<?= Yii::getAlias('@img')?>/logo.png" width="600px">
    <h1 class="font-weight-light" style="color:black">Aprendizaje 100% digital.</h1>
    <p class="lead" style="color:black">Educación colaborativa desde la web.</p>
    <p>
      <?= Html::a(Yii::t('app', 'Ingresar &raquo;'), ['user/login'], ['class' => 'btn btn-primary']) ?>
    </p>
   	<p>
      <?= Html::a(Yii::t('app', 'Registrarse &raquo;'), ['user/register'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>
</div>