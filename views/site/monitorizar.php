<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Monitorizar';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="monitorizar">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Monitorización del sistema y hardware
    </p>

    <h2>Monitorización de Hardware</h2>

    <table>
        <tr>
            <td>Temperatura</td>
            <td></td>
        </tr>

        <tr>
            <td>Usuarios conectados</td>
            <td></td>
        </tr>

        <tr>
            <td>RAM</td>
            <td></td>
        </tr>

        <tr>
            <td>Almacenamiento Libre</td>
            <td></td>
        </tr>

        <tr>
            <td>Carga de CPU</td>
            <td></td>
        </tr>
    </table>

    <h3>Procesos con un consumo más alto</h3>

</div>
