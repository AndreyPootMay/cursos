<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = Yii::t('app', '#404 No encontrado')
?>
<div class="site-error">

    <div class="alert alert-danger">
        <?= nl2br(Yii::t('app', '404, No se encuentra la acción en el servidor.')) ?>
    </div>

    <p>
        <?= Yii::t('app', 'El siguiente error sucede gracias a un problema con el servidor.') ?>
    </p>
    <p>
        <?= Yii::t('app', 'Contacte con el administrador para más información.')  ?>
    </p>

</div>
