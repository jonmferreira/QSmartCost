<?php

namespace frontend\controllers;

use Yii;
use common\models\LineAuditResults;
use common\models\LineAuditResultsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LineAuditResultsController implements the CRUD actions for LineAuditResults model.
 */
class LineAuditResultsController extends Controller
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
     * Lists all LineAuditResults models.
     * @return mixed
     */
    public function actionIndex($id_auditoria)
    {
        $searchModel = new LineAuditResultsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id_auditoria);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LineAuditResults model.
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
     * Creates a new LineAuditResults model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LineAuditResults();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing LineAuditResults model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing LineAuditResults model.
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
     * Finds the LineAuditResults model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LineAuditResults the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LineAuditResults::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	public function actionOk($id)
    {
		$model = $this->findModel($id);
		$model->result = "OK";
		$model->save();
		
		return $this->redirect(['index', 'id_auditoria' => $model->id_auditoria]);
	}
	
	public function actionNg($id)
    {
		$model = $this->findModel($id);
		$model->result = "NG";
		$model->save();
		
		return $this->redirect(['index', 'id_auditoria' => $model->id_auditoria]);
	}
	
	public function actionNa($id)
    {
		$model = $this->findModel($id);
		$model->result = "Ñ/A";
		$model->save();
		
		return $this->redirect(['index', 'id_auditoria' => $model->id_auditoria]);
	}
}
