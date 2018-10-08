<?php

namespace frontend\controllers;

use Yii;
use common\models\Loadtest;
use common\models\LoadtestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LoadtestController implements the CRUD actions for Loadtest model.
 */
class LoadtestController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Loadtest models.
     * @return mixed
     */
    public function actionIndex()
    {
		echo json_encode($model->id);
		
    }

    /**
     * Displays a single Loadtest model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Loadtest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Loadtest();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Loadtest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

		$data_atual = date("Y-m-d");
		$model->iqc_received = $data_atual;
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


public function actionStart($id)
    {
date_default_timezone_set("America/Sao_Paulo");
        $model = $this->findModel($id);
$model->inicio_inspecao = date("Y-m-d h:i:s");
echo $model->inicio_inspecao;
        $model->save();
return $this->render('view', [
            'model' => $this->findModel($id),
        ]);    }

public function actionStop($id)
    {
date_default_timezone_set("America/Sao_Paulo");
        $model = $this->findModel($id);
$model->fim_inspecao = date("Y-m-d h:i:s");
$model->status = 1;
        $model->save() ;
return $this->render('view', [
            'model' => $this->findModel($id),
        ]);    }



    /**
     * Deletes an existing Loadtest model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Loadtest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Loadtest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Loadtest::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
