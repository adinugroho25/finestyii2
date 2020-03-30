<?php

namespace app\modules\h2hdjp\controllers;

use yii\web\Controller;

/**
 * Default controller for the `h2hdjp` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
