<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;

use app\models\FormularioForm;

class SitioController extends Controller{

    public function actionInicio(){
        
        $model = new FormularioForm;

        if($model->load(Yii::$app->request->post()) && $model->validate() ){

            $valorRespuesta=($model->valora+$model->valorb);

            return $this->render('inicio', ['mensaje'=>"El resultado es: ".$valorRespuesta,'model'=>$model]);
        }

        return $this->render('inicio', ['mensaje'=>"",'model'=>$model]);
    }
}


?>