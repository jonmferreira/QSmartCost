<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lar".
 *
 * @property integer $id
 * @property string $supplier_code
 * @property string $supplier_name
 * @property string $judgement
 * @property string $receipt_date
 */
class Lar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_code', 'supplier_name', 'judgement', 'receipt_date'], 'required'],
            [['receipt_date'], 'safe'],
            [['supplier_code', 'judgement'], 'string', 'max' => 15],
            [['supplier_name'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'supplier_code' => 'Supplier Code',
            'supplier_name' => 'Supplier Name',
            'judgement' => 'Judgement',
            'receipt_date' => 'Receipt Date',
        ];
    }
}
