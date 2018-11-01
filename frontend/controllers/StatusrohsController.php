<?php

namespace frontend\controllers;

use Yii;
use common\models\statusrohs;
use common\models\statusrohsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StatusrohsController implements the CRUD actions for statusrohs model.
 */
class StatusrohsController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all statusrohs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new statusrohsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single statusrohs model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new statusrohs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new statusrohs();
		$model->status = 'PENDING';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionCreate2()
    {
        if (Yii::$app->request->isAjax) {

            $data = Yii::$app->request->post();

            $month= $data['month'];
            
            
            $model = new statusrohs();
            $model->status = 'PENDING';
            $model->month = $month;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
           /* $model->month = $month;

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return $this->render('create',[
                'model' => $model,
                'code' => 100,
            ]);*/
        }
    }

    public function actionDatas()
    {
        
        if (Yii::$app->request->isAjax) {
            $t = Yii::$app->request->post();
            $input = $t['month'];
            $month = substr($input, 0,-3);
            $year = substr($input, 4);

            $array = [
                "JAN" => "01","FEV" => "02","MAR"=>"03","ABR" => "04","MAI" => "05","JUN"=>"06","JUL"=>"07","AGO"=>"08","SET"=>"09","OUT"=>"10",
                "NOV" => "11","DEZ"=>"12"
            ];


            $start_date = "01-".$array[$month]."-20".$year;
            $start_time = strtotime($start_date);

            $end_time = strtotime("+1 month", $start_time);

            for($i=$start_time; $i<$end_time; $i+=86400)
            {
               $list[] = date('Y-m-d-D', $i);
            }
            //$htm= '<table class="table table-bordered" ><tr>';
            $htm = '<thead style="background-color:#b71c1c;color:#fff">
                    <tr >
                        <th></th>
            ';

            $dias_total = array();

            foreach ($list as $data) {
                //print_r(substr($data,-3));
                if(!(substr($data,-3) == 'Sun' || substr($data,-3) == 'Sat')){
                    $htm = $htm . '<th>'. substr($data, -6,-4) .'</th>';
                    //print_r($data." ");
                    array_push($dias_total,substr($data, -6,-4));
                }
                
            }

            $htm = $htm.'</tr></thead><tbody>';

            $items = array('Item1 MWO IQC6','Item2 RAC IQC6');
            foreach ($items as $key) {
                $htm = $htm . '<tr><td>' . $key . '</td>';
                foreach ($dias_total as $dia) {
                    $htm = $htm .'
                        <td>
                            <div class="radio">
                                <label>
                                  <input type="radio" name="radios_'. $key .'" id="radio_"' . $key.'_'. $dia .'" value="'. $dia .'" >
                                </label>
                            </div>
                        </td>
                    ';
                }
                $htm = $htm . '</tr>';
            }
            $htm = $htm.'</tbody>';
            echo $htm;
        }
    }


    /**
     * Updates an existing statusrohs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing statusrohs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the statusrohs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return statusrohs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = statusrohs::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
