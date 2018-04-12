<?php

/* @var $this yii\web\View */
/* @var $software Boolean que entra por POST si envías el formulario */
/* @var $firmware Boolean que entra por POST si envías el formulario */

use app\widgets\Alert;
use yii\helpers\Html;

$this->title = 'Actualizar';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Alert::widget() ?>

<div class="actualizar">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Desde esta sección puedes actualizar completamente el sistema operativo,
        el software instalado y el firmware.
    </p>

    <?= Html::beginForm([
        'site/actualizar', // Lugar donde lleva el submit
        ],
        'post',
        [
            'enctype' => 'multipart/form-data',
            'class' => 'form-verde form-horizontal col-lg-6 col-lg-offset-3 ',
            'id' => 'alquilar-form', // Nombre o id del formulario
        ]
    ); ?>

    <?= Html::label('Software', 'software', ['class' => 'label']) ?>
    <?= Html::checkbox('software', true, ['class' => 'form-marcar']) ?>

    <br /><br />

    <?= Html::label('Firmware', 'firmware', ['class' => 'label']) ?>
    <?= Html::checkbox('firmware', true, ['class' => 'form-marcar']) ?>

    <br /><br />

    <div class=“form-group”>
        <?= Html::SubmitButton('Actualizar', ['class' => 'btn btn-danger'
        ]); ?>
    </div>

    <?= Html::endForm() ?>
</div>
