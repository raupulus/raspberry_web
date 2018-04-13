<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

function esAdmin() {
    return Yii::$app->user->identity->rol === 'administrador';
}

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <?php $this->head() ?>

    <title><?= Html::encode(\Yii::$app->name); ?></title>

    <!-- Custom CSS -->
    <link href="<?= $this->theme->baseUrl ?>/css/rpihacker.css" rel="stylesheet">
</head>

<body>
<?php $this->beginBody() ?>
    <!-- Menú de navegación -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Branding -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Yii::getAlias('@web/index.php'); ?>">
                    <img src="<?= $this->theme->baseUrl ?>/images/logo.png"
                         alt="" />
                </a>
            </div>

            <!-- Entradas del menú -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                NavBar::begin([
                    'brandLabel' => Yii::$app->name,
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'id' => 'nav',
                        'class' => 'nav navbar',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Inicio', 'url' => ['site/index']],
                        ['label' => 'GPIO', 'url' => ['site/gpio']],
                        ['label' => 'Monitorización', 'url' => ['site/monitorizar']],
                        ['label' => 'Información', 'url' => ['site/informacion']],
                        ['label' => 'Actualizar', 'url' => ['site/actualizar']],
                        ['label' => 'Contacto', 'url' => ['site/contact']],

                        /* Opciones solo para usuarios logueados */
                        Yii::$app->user->isGuest ? (
                        ['label' => 'Login',
                            'items' => [
                                ['label' => 'Entrar', 'url' => ['/site/login']],
                                ['label' => 'Crear Cuenta', 'url' => ['/usuarios/create']],
                            ]
                        ]
                        ) : (
                        ['label' => Yii::$app->user->identity->nombre,
                            'items' => [
                                ['label' => 'Perfil', 'url' => [
                                    '/usuarios/view',
                                    'id' => Yii::$app->user->id]
                                ],
                                (
                                '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Cerrar Sesión',
                                    ['class' => 'btn btn-link logout']
                                )
                                    . Html::endForm()
                                    . '</li>'
                                ),

                                /* A continuación opciones solo para admins */
                                esAdmin() ? (
                                   [
                                       'label' => 'Usuarios',
                                       'url' => ['/usuarios/index']
                                   ]
                                ) : ''
                            ]
                        ]
                        ),
                    ],
                ]);
                NavBar::end();
                ?>
            </div>
            <!-- /Entradas del menú (.navbar-collapse) -->
        </div>
        <!-- /Menú de navegación (.container) -->
    </nav>


    <!-- Contenido del sitio -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <?= Html::encode(\Yii::$app->name); ?> 2018 - <a href="http://www.fryntiz.es">www.fryntiz.es</a>.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
