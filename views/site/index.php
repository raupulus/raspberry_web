<?php

/* @var $this yii\web\View */

$this->title = 'Raspberry PI Control WEB';
?>
<div class="site-index">
    <div class="body-content">
        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img src="<?= $this->theme->baseUrl ?>/images/monitor.gif" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>Raspberry PI Control WEB</h1>
                <p>
                    Esta aplicación cumple de interfaz para depurar a un nivel
                    básico un dispositivo RPI.
                    <br />
                    Puedes controlar pines GPIO con valores alto/bajo para
                    comprobar que funcionan y/o a modo debug antes de crear un
                    script para controlar cualquier cosa.
                    <br />
                    También puedes actualizar desde esta interfaz tu Raspberry o
                    monitorizar aspectos de salud como temperatura, procesos...
                </p>

                <a class="btn btn-primary btn-lg"
                   target=_blank
                   href="http://www.fryntiz.es">
                    WEB del Administrador
                </a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-4">
                <h2>GPIO</h2>

                <p>
                    En este apartado puedes comprobar cada uno de los pines GPIO
                    independientemente o en conjunto global.
                    <br />
                    El principal objetivo de esta sección es que mediante unos
                    sencillos clicks puedas activar o desactivar cada salida
                    de forma independiente y testear el funcionamiento sobre
                    el relé, sensor o dispositivo correspondiente.
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <h2>Monitorización</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Actualizar</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
