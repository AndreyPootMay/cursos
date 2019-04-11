<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MyCoursesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mis cursos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-courses-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            [
                'attribute' => '',
                'label' => 'Nombre del curso',
                'value' => 'courses.course_name',
            ],
            'evaluation',
            'progress',
            'certification',
            //'active',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
