<?php

namespace frontend\controllers;

use Yii;
use common\models\Alert;
use common\models\AlertSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * AlertController implements the CRUD actions for Alert model.
 */
class AlertController extends Controller
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
     * Lists all Alert models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlertSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Alert model.
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
     * Creates a new Alert model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        //  $modeloTeste = $this->getModelo();
        //   foreach ($modeloTeste as $mdl) {
        //     echo $modelo   = $mdl['model'];
        //   }

         $model = new Alert();

		 $model->imageFiles = UploadedFile::getInstance($model, 'imageFiles');
        // $model->divisao = $this->getDivisao('NW717060001565');
         $result = $this->getDados($id);
         foreach ($result as $perk) {

             $part_name   = $perk['item_name'];
             $total_qty   = $perk['receipt_qty'];
             $part_number = $perk['item'];
             $nw          = $perk['nw'];

         }

         $model->id_data = $this->getId();
		     $model->asn = $id;
         $model->part_name = $part_name;
         $model->amostra = 5;
         $model->total_qty = $total_qty;
         $model->part_number = $part_number;

         if($nw == 7){
           $model->divisao = 'ARCON';
         }else{
           $model->divisao = 'MWO';
         }

         if ($model->load(Yii::$app->request->post()) && $model->save()) {
           return $this->redirect(['view', 'id' => $model->id]);
         } else {
           return $this->render('create', [
             'model' => $model,
           ]);
         }
    }

    public function getId(){

      $dataAtual = date("Ymd");

      $connection = Yii::$app->getDb();
      $command = $connection->createCommand("SELECT id_data FROM alert WHERE id = (SELECT MAX(id) FROM alert)");

      $result = $command->queryAll();
      foreach ($result as $perk) {
        $divisao = $perk['id_data'];
        break;
      }
      $lastId = (str_split($divisao,8));
      $currentId = $lastId[1] + 1;
      $idFinal = $dataAtual.''.$currentId;
      return $idFinal;
    }

    public function getDados($asn){

      $connection = Yii::$app->getDb();
      $command = $connection->createCommand("SELECT * FROM `load` WHERE asn LIKE '$asn'");

      $result = $command->queryAll();

      return $result;
    }

    public function getModelo(){

      $connection = Yii::$app->getDb();
      $command = $connection->createCommand("SELECT * FROM `oqc_inspection`");

      $result = $command->queryAll();

      return $result;
    }

    /**
     * Updates an existing Alert model.
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
     * Deletes an existing Alert model.
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
     * Finds the Alert model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Alert the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Alert::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
