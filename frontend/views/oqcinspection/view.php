<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Oqcinspection */

$this->title = $model->model .".". $model->sufix . " - " . $model->name;

?>
<div class="oqcinspection-view">

    <h2 align="center"><b><?= Html::encode($this->title) ?></b></h2><br>

    <div class="col-md-6">
        <div class="box box-danger">

            <div class="box-header with-border" align="center">
                <h3><b>General Inspection</b></h3>
            </div>

            <div class="box-body" style="margin-top: 15px">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/GI/1_Procedimento/Procedimento.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Procedimento</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/GI/2_Especificacao/<?= $model->model ?> <?= $model->sufix ?>.xlsx">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Checklist</button>
                    </a>
                </div>
            </div>

            <div class="box-body" style="margin-top: 15px">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/Guia_Inspecao/<?= $model->model?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Guia por Modelo</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/GI/4_Inspecao_Geral/Inspecao_Geral.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Guia Geral</button>
                    </a>
                </div>
            </div>

            <div class="box-body" style="margin-top: 15px">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/GI/5_Compliance_Master/">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 12pt; height: 70px; border-radius: 10px">Compliance Master</button>
                    </a>
                </div>
				<div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/GI/9_Quality_Letter_Alert/">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 12pt; height: 70px; border-radius: 10px">Quality Letter Alert</button>
                    </a>
                </div>
            </div>

            
            <img>

        </div>
    </div>

    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border" align="center" style="font-size: 30px">
                <h3><b>ORT</b></h3>
            </div>

            <div class="box-body" style="margin-top: 15px">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/ELT/1_Procedimento/Procedimento.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Procedimento</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/ELT/2_Especificacao/<?= $model->model ?>.xls">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Checklist</button>
                    </a>
                </div>
            </div>

            <div class="box-body" style="margin-top: 15px;">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/Guia_Inspecao/<?= $model->model?>.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Guia por Modelo</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/ELT/4_Inspecao_Geral/Inspecao_Geral.pdf">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 15pt; height: 70px; border-radius: 10px">Guia Geral</button>
                    </a>
                </div>
            </div>

            <div class="box-body" style="margin-top: 15px;  margin-top: 15px">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <a target="_blank" href="../../../QSmart_Files/OQC_Inspection/ELT/5_Compliance/">
                        <button type="button" class="btn btn-block btn-danger btn-lg" style="font-size: 12pt; height: 70px; border-radius: 10px">Compliance Master</button>
                    </a>
                </div>
            </div>
            <img>

        </div>
    </div>


</div>
