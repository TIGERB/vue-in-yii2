<?php
namespace frontend\controllers;


use yii\web\Controller;
use frontend\v1\logics\Response;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * forbid layout file that is frontend/web/views/layouts/main.php
     * @var boolean
     */
    public $layout = false;

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
