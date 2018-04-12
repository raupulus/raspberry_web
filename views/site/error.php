<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <h2>Ha ocurrido un error</h2>

    <h3>
        <span class="mensaje-error">atención>Umhh ehh... !Quieto ahí!</span>
    </h3>

    <p>
        Si estás viendo esta ventana pueden haber ocurrido varias cosas:
        <ul>
            <li>
                Tenemos un error y en ese caso agradeceriamos que lo reportes
                desde la <a href="site/contact" title="contacto">la página
                de contacto</a> de esta web.
            </li>

            <li>
                Has introducido mal algún parámetro o ruta, revísalo.
            </li>

            <li>
                Estás intentando hacer cosas malas. Ten en cuenta que será
                registrado el error y en caso de repetirse lo investigaremos.
            </li>
        </ul>
    </p>

    <p>
        Por favor, contáctanos si ves cualquier error o comportamiento extraño
        para que podamos mejorar la calidad del servicio.
    </p>

</div>
