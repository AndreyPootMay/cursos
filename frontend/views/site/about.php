<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Acerca de');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Yii::t('app', 'Esta es la página de "Acerca de", puedes editarla desde:')  ?></p>

    <code><?= __FILE__ ?></code>
</div>
