<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Courses */

$this->title = Yii::t('app', 'Crear Curso');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
