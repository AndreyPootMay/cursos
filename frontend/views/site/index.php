<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'E Center - Aprendizaje en línea';
?>
<div class="site-index">
    <?php if(Yii::$app->user->isGuest) { ?>
      <div class="col-12 text-center">
        <img class="logo" src="<?php echo Yii::getAlias('@img')?>/logo.png" width="600px">
        <h1 class="font-weight-light" style="color:black">Aprendizaje 100% digital.</h1>
        <p class="lead" style="color:black">Educación colaborativa desde la web.</p>
        <p>
            <?php echo Html::a(Yii::t('app', 'Ingresar &raquo;'), ['user/login'], ['class' => 'btn btn-primary']) ?>
        </p>
           <p>
            <?php echo Html::a(Yii::t('app', 'Registrarse &raquo;'), ['user/register'], ['class' => 'btn btn-success']) ?>
        </p>
        </div>
    <?php } else { ?>

        <!-- Datos del usuario en panel de control -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p><?= Yii::t('app', 'Cursos comprados')  ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>2</h3>

              <p><?= Yii::t('app', 'Cursos completados')  ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-certificate"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>1</h3>

              <p><?= Yii::t('app', 'Cursos archivados')  ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-trash"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>1</h3>

              <p><?= Yii::t('app', 'Cursos impartidos')  ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    </div>
<div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="box box-solid">
                <div class="box-body">
                    <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            <?= Yii::t('app', 'Categoría del curso') ?>
                    </h4>
                    <div class="media">
                    <div class="media-left">
                        <a href="https://themequarry.com/theme/ webadmin-responsive-admin-dashboard-template-ASFEDAA8" class="ad-click-event">
                        <img src="https://themequarry.com/storage/images/approved/ASFEDAA8_v1.2.0_595b0b787d2e5.png" alt="Nombre del curso" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                        </a>
                    </div>
                <div class="media-body">
                    <div class="clearfix">
                        <p class="pull-right">
                            <a href="#" class="btn btn-success btn-sm ad-click-event">
                                <?= Yii::t('app', '¡Echa un vistazo!') ?>
                            </a>
                        </p>

                    <h4 style="margin-top: 0"><?= Yii::t('app', 'Nombre del curso')  ?> ─ $18</h4>
                    <p><?= Yii::t('app', 'Descripción del curso')  ?></p>
                    <p style="margin-bottom: 0">
                        <i class="fa fa-shopping-cart margin-r5"></i> 32+ <?= Yii::t('app', 'Compras') ?>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
</div>
