<?php

use yii\helpers\Html;

?>
<header class="main-header">
        <!-- Logo -->
        <a href="/site/index" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><?= '<img src="'. Yii::getAlias('@img') . '\logo.png" width="60px" class="img-responsive" style="padding-top: 10;"/>'?></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b class="text-center"><?= Yii::t('app', 'E-Center') ?></b> </span>
        </a>
        <?php  if (!Yii::$app->user->isGuest) { ?>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'user-image', 'alt'=>'User Image']) ?>
                  <span class="hidden-xs"><?=  Yii::$app->user->identity->username ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt'=>'User Image']) ?>
                    <p>
                      <?= Yii::$app->user->identity->username ?> - Web Developer
                      <small><?= Yii::t('app', 'Miembro desde: ')  ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-12 text-center">
                      <?= Html::a(Yii::t('app', 'Mis cursos'), ['my-courses/index', 'id' => Yii::$app->user->identity->id], ['class' => 'btn btn-primary']) ?>
                    </div>
                    <!--<div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>-->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                        <?= Html::a(Yii::t('app', 'Perfil'), ['profile/view', 'id' => Yii::$app->user->identity->id], ['class' => 'btn btn-primary']) ?>
                    </div>
                    <div class="pull-right">
                      <?= Html::a(Yii::t('app', 'Cerrar sesión &raquo;'), ['user/security/logout'], ['data' => [
                      'method' => 'post']], ['class' => 'btn btn-danger']) ?>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      <?php } ?>
      </header>
