<?php

namespace frontend\controllers;

use Yii;
use common\models\Load;
use common\models\LoadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * LoadController implements the CRUD actions for Load model.
 */
class LoadController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Load models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LoadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Load model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Load model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Load();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->asn]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Load model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->asn]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Load model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Load model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Load the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function findModel($id)
    {
        if (($model = Load::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	public function actionStart($id)
    {
		date_default_timezone_set("America/Manaus");
		$model = $this->findModel($id);
		$today = date("Y-m-d");
		$model->iqc_received = $today ." ". $model->iqc_received .":00";
		$model->inicio_inspecao = date("Y-m-d H:i:s");
		$model->inspetor_iqc = Yii::$app->user->identity->name;
		$model->status = "DOING";
		$model->save();
		
		return $this->redirect(['view', 'id' => $model->asn]);
	}
	
	public function actionStop($id)
    {
		date_default_timezone_set("America/Manaus");
		$model = $this->findModel($id);
		$model->fim_inspecao = date("Y-m-d H:i:s");
		$model->status = "DONE";
		$model->save();
		
		return $this->redirect(['view', 'id' => $model->asn]);
	}
	
	public function actionAlert($id)
  {
	return $this->redirect(['alert/create', 'id' => $id]);
	}

}
