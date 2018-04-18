<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Información';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="monitorizar">

    <h1><?= Html::encode($this->title) ?></h1>

    <h2>Información de Hardware</h2>

    <div>
        <p>
        Este proyecto se destina a placas Raspberry para debug y monitorización
        de hardware y componentes.
        </p>

        <p>Hasta el momento se ha testeado en:</p>

        <ul>
            <li>Raspberry PI Zero v1.3</li>
            <li>Raspberry PI Zero WH v1.1</li>
            <li>Raspberry Pi 2B+</li>
        </ul>

    <h2>Instrucciones de uso</h2>

    <div>
        <p>
            Como usar este sitio web (Aún faltan datos debido a cambios
            constantes)
        </p>

        <ul>
            <li>Clonar el repositorio en el directorio del servidor WEB</li>
            <li>Desplegar mediante <strong>composer install</strong></li>
            <li>Asignar permisos</li>
            <li>Entrar en la URL desde un navegador</li>
        </ul>
    </div>
</div>
