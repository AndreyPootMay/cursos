<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'E Center - Aprendizaje en línea';
?>
<div class="site-index">
  <div class="jumbotron">
    <p>
        <?= Html::a(Yii::t('app', 'Registrarse &raquo;'), ['user/register'], ['class' => 'btn btn-success']) ?>
    </p>
  </div>
</div>