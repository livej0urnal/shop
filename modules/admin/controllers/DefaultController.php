<?php

namespace app\modules\admin\controllers;

use app\modules\admin\controllers\AppAdminController;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('index');
    }
}
