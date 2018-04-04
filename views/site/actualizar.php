<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Actualizar';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="actualizar">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Desde esta sección puedes actualizar completamente el sistema operativo,
        el software instalado y el firmware.
    </p>

    <form action="#" method="post" role="form-inline">
        <div class="checkbox">
            <label>
                <input type="checkbox" /> Software
            </label>

            <br />

            <label>
                <input type="checkbox" /> Firmware
            </label>
        </div>

        <input type="submit" value="Actualizar" class="btn btn-default" />
    </form>
</div>
