<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Courses */

$this->title = Yii::t('app', 'Actualizar Cursos: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="courses-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
