<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php  if (!Yii::$app->user->isGuest) { ?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= Yii::t('app', '')  ?>
            </div>
            <div class="pull-left info">
               
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php } ?>
        <?php
        if (!Yii::$app->user->isGuest) {
        echo Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => Yii::t('app', 'Menú'), 'options' => ['class' => 'header']],
                        ['label' => Yii::t('app', 'Panel de Control'), 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => Yii::t('app', 'Mis cursos'),
                            'icon' => 'fa fa-database',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => Yii::t('app', 'Cursos Activos'),
                                    'icon' => 'fa fa-bookmark',
                                    'url' => ['my-courses/index', 'id' => Yii::$app->user->identity->id, 'active' => 1],
				                    'active' => $this->context->route == ['my-courses/index', 'id' => Yii::$app->user->identity->id, 'active' => 1]
                                ],
                                [
                                    'label' => Yii::t('app', 'Cursos Archivados'),
                                    'icon' => 'fa fa-trash',
                                    'url' => ['my-courses/index', 'id' => Yii::$app->user->identity->id, 'active' => 0],
                                    'active' => $this->context->route == ['my-courses/index', 'id' => Yii::$app->user->identity->id, 'active' => 0]
                                ]
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Acerca de'),
                            'icon' => 'fa fa-info',
                            'url' => ['/site/about'],
                            'active' => $this->context->route == 'site/about',
                        ],
                        //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                        //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ],
                ]
        );
    }
?>
        
    </section>
    <!-- /.sidebar -->
</aside>
