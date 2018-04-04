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

    <form action="#" method="post">
        <input type="checkbox" />
        <br />
        <input type="checkbox" />
        <br />
        <input type="submit" value="Actualizar"/>
    </form>
</div>
