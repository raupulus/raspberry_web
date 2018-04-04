<?php

use yii\widgets\Menu;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
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
    <?php $this->head() ?>

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Html::encode(\Yii::$app->name); ?></title>

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
                    <img src="<?= $this->theme->baseUrl ?>/images/logo.png" alt="">
                </a>
            </div>

            <!-- Entradas del menú -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?= Menu::widget([
                    'options' => [
                      "id"  => "nav",
                      "class" => "nav navbar-nav"
                    ],
                    'items' => [
                        ['label' => 'Inicio', 'url' => ['site/index']],
                        ['label' => 'GPIO', 'url' => ['site/gpio']],
                        ['label' => 'Monitorización', 'url' => ['site/monitorizar']],
                        ['label' => 'Información', 'url' => ['site/informacion']],
                        ['label' => 'About', 'url' => ['site/about']],
                        ['label' => 'Contacto', 'url' => ['site/contact']],
                        Yii::$app->user->isGuest ? (
                            ['label' => 'Login', 'url' => ['/site/login']]
                        ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                        )
                    ],
                ]);
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

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
