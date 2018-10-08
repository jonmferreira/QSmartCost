<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "load".
 *
 * @property string $asn
 * @property string $item
 * @property string $item_name
 * @property string $receipt_qty
 * @property string $departure_date
 * @property string $receipt_date
 * @property string $judgement
 * @property string $iqc_received
 * @property string $inicio_inspecao
 * @property string $fim_inspecao
 * @property string $status
 * @property string $inspetor_iqc
 * @property integer $tempo_inspecao
 */
class Load extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'load';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asn', 'item', 'item_name', 'receipt_qty', 'tempo_inspecao'], 'required'],
            [['inicio_inspecao', 'fim_inspecao'], 'safe'],
            [['tempo_inspecao'], 'integer'],
            [['asn', 'item', 'item_name', 'receipt_qty', 'departure_date', 'receipt_date', 'judgement', 'iqc_received', 'status', 'inspetor_iqc'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'asn' => 'ASN',
            'item' => 'Item',
            'item_name' => 'Item Name',
            'receipt_qty' => 'Receipt Qty',
            'departure_date' => 'Departure Date',
            'receipt_date' => 'Receipt Date',
            'judgement' => 'Judgement Date',
            'iqc_received' => 'IQC Received',
            'inicio_inspecao' => 'Início Inspeção',
            'fim_inspecao' => 'Fim Inspeção',
            'status' => 'Status',
            'inspetor_iqc' => 'Inspetor IQC',
            'tempo_inspecao' => 'Tempo de Inspeção',
        ];
    }
}
