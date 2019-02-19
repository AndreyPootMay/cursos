<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MyCourses */

$this->title = Yii::t('app', 'Create My Courses');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'My Courses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-courses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
