<?php

namespace app\controllers;

use function shell_exec;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Muestra el index, la página de inicio.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Muestra el menú de selección para gestionar pines GPIO.
     * @return string
     */
    public function actionGpio()
    {
        // && $inputPost->isAjax)
        //if ($inputPost = Yii::$app->request->post()) {
        if (Yii::$app->request->isAjax) {
            $inputPost = Yii::$app->request->post();
            $nombre = $inputPost['nombre'];
            $valor = $inputPost['valor'];
            return json_encode('He recibido el nombre: '.$nombre.
                ' y el valor: '.$valor);

            //shell_exec('gestionarGPIO --on '.$inputPost[]);
            //Yii::$app->session->setFlash('success',
            //    'Activado pin '.$inputPost['pin']
            //);
        }
        return $this->render('gpio');
    }

    /**
     * Información sobre el sistema y el hardware.
     * @return string
     */
    public function actionMonitorizar()
    {
        return $this->render('monitorizar');
    }

    /**
     * Información sobre el proyecto e instrucciones de uso.
     * @return string
     */
    public function actionInformacion()
    {
        return $this->render('informacion');
    }

    /**
     * Lleva a la página de actualizar el sistema y el firmware.
     * En el caso de recibir petición mediante POST recarga la página enviando
     * las variables "firmware" y "software" con su valor booleano recibido.
     *
     * @return string
     */
    public function actionActualizar()
    {
        if ($checkbox = Yii::$app->request->post()) {
            $software = isset($checkbox['software']) ? true : false;
            $firmware = isset($checkbox['firmware']) ? true : false;

            if ($software && $firmware) {
                Yii::$app->session->setFlash('success',
                    'Se ha enviado la orden de actualizar Software y    
                     Firmware.'.
                    '<br />'.
                    'No es buena idea volver a enviar la orden.'
                );
                //shell_exec('actualizar');
            } elseif ($firmware) {
                Yii::$app->session->setFlash('success',
                    'Se actualiza solo Firmware'.
                    '<br />'.
                    'No es buena idea volver a enviar la orden.'
                );
                //shell_exec('actualizar -f');
            } elseif ($software) {
                Yii::$app->session->setFlash('success',
                    'Se actualiza solo Software.'.
                    '<br />'.
                    'No es buena idea volver a enviar la orden.'
                );
                //shell_exec('actualizar -s');
            }

            /*
            return $this->render('actualizar', [
            'software' => $software,
            'firmware' => $firmware
            ]);
            */
        }

        return $this->render('actualizar');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
}
