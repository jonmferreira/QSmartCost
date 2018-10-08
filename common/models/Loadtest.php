<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "loadtest".
 *
 * @property string $item
 * @property string $departure_date
 * @property string $receipt_date
 * @property integer $id
 * @property string $inicio_inspecao
 * @property string $fim_inspecao
 * @property integer $status
 */
class Loadtest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loadtest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item', 'departure_date', 'receipt_date', 'status'], 'required'],
            [['status'], 'integer'],
            [['item', 'departure_date', 'receipt_date', 'inicio_inspecao', 'fim_inspecao'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item' => 'Item',
            'departure_date' => 'Departure Date',
            'receipt_date' => 'Receipt Date',
            'id' => 'ID',
            'inicio_inspecao' => 'Inicio Inspecao',
            'fim_inspecao' => 'Fim Inspecao',
            'status' => 'Status',
        ];
    }
}
