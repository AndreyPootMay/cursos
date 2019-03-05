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
                <?= Yii::t('app', 'E-Center')  ?>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'Master',
                            'icon' => 'fa fa-database',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Master1',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=master1/',
				    'active' => $this->context->route == 'master1/index'
                                ],
                                [
                                    'label' => 'Master2',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=master2/',
				    'active' => $this->context->route == 'master2/index'
                                ]
                            ]
                        ],
                        [
                            'label' => 'Users',
                            'icon' => 'fa fa-users',
                            'url' => ['/user'],
                            'active' => $this->context->route == 'user/index',
                        ],
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ],
                ]
        );
    }
?>
        
    </section>
    <!-- /.sidebar -->
</aside>
