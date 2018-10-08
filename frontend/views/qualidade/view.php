<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Qualidade */

$this->title = $model->partNumber ." - ". $model->partName  ;

?>
<div class="qualidade-view">

    <h2 align="center"><b><?= Html::encode($this->title) ?></b></h2><br>

    <div class="col-md-6">
        <div class="box box-danger">

            <div class="box-header with-border" align="center">
                <h3><b>Inspeção de Entrada</b></h3>
            </div>

            <div class="box-body">
                <h4 style="margin-bottom: 18pt"><b>STEP 1: Checar Inspeção</b></h4>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/1_Especificacao_Inspecao/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Especificação</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/2_Espelho_GERP/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">GERP System</button>
                    </a>
                </div>
            </div>

            <div class="box-body ">
                <h4 style="margin-bottom: 18pt"><b>STEP 2: Checar Desenho</b></h4>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/3_Desenho_Tecnico/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Desenho</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/4_Lista_ECO/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">ECO</button>
                    </a>
                </div>
            </div>

            <div class="box-body" style="margin-bottom: 5pt">
                <h4 style="margin-bottom: 19pt"><b>STEP 3: Método de Inspeção</b></h4>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/5_Guia_Inspecao/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 14pt; height: 70px; border-radius: 10px">Guia de Inspeção</button>
                    </a>
                </div>
				<div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/6_Approval_Sheet/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 14pt; height: 70px; border-radius: 10px">Approval Sheet</button>
                    </a>
                </div>
            </div>
            <img>

        </div>
    </div>

    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border" align="center" style="font-size: 30px">
                <h3><b>Histórico da Qualidade</b></h3>
            </div>

            <div class="box-body" style="margin-top: 53px">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/7_Issue/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">PRR</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/8_Historico_Inspecao/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">LAR Issue</button>
                    </a>
                </div>
            </div>

            <div class="box-body" style="margin-top: 53px">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/9_Compliance">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Compliance</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/10_NCR_Report/<?= $model->partNumber ?>">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Claim Report</button>
                    </a>
                </div>
            </div>

            <div class="box-body" style="margin-top: 53px; margin-bottom: 5pt">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/11_Homologacao/<?= $model->partNumber ?>.xlsx">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 16pt; height: 70px; border-radius: 10px">Homologação</button>
                    </a>
                </div>
				 <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/Digital_History_Card/12_Amostra_Limite/<?= $model->partNumber ?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Uso Especial</button>
                    </a>
                </div>
            </div>
			
			
            <img>

        </div>
    </div>


</div>
