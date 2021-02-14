<?php
namespace frontend\controllers;

use Yii;
use frontend\components\Controller;
use frontend\models\ConsultForm;

class ConsultController extends Controller
{
    public function actionIndex()
    {
        $model = new ConsultForm();
        if ($model->load(Yii::$app->request->post()))
        {
            Yii::$app->session->setFlash('success', 'Form sent success');
            return $this->redirect(['consult/index']);
        }

        return $this->render('index', ['model' => $model]);
    }
}