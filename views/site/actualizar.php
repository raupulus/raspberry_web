<?php

/* @var $this yii\web\View */
/* @var $software Boolean que entra por POST si envías el formulario */
/* @var $firmware Boolean que entra por POST si envías el formulario */

use yii\helpers\Html;

$this->title = 'Actualizar';
$this->params['breadcrumbs'][] = $this->title;

//var_dump($this);
function actualizar() {
    if ($this->firmware && $this->software) {
        echo 'Se actualiza Firmware y Software';
    } elseif ($this->firmware) {
        echo 'Se actualiza solo Firmware';
    } elseif ($this->software) {
        echo 'Se actualiza solo Software';
    }
}

if (Yii::$app->request->isPost) {
    $checkbox = $this;
    var_dump($checkbox);
    die();
    //actualizar();
    //echo '<h1>'.Yii::$app->request->post('software').'</h1>';
    //echo '<h1>'.$checkbox['software'].'</h1>';
    echo '<h1>'.$checkbox.'</h1>';
}

?>
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
