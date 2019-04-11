<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Courses */

$this->title = $model->course_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="courses-view">

    <p>
        <?= $model->user_id != Yii::$app->user->identity->id ? Html::a(Yii::t('app', 'Comprar Curso'), ['buy', 'id' => $model->id], ['class' => 'btn btn-warning']) : ''  ?>
        <?= $model->user_id == Yii::$app->user->identity->id ? Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) : '' ?>
        <?= $model->user_id == Yii::$app->user->identity->id ? Html::a(Yii::t('app', 'Eliminar'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', '¿Desea eliminar el siguiente curso?'),
                'method' => 'post',
            ],
        ]) : '' ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'user_id',
            'course_name',
            'course_details',
            'evaluation',
            'category',
            'price',
            'students',
            'active',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
