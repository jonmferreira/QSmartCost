<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "qcost".
 *
 * @property integer $id
 * @property string $custo
 * @property string $modelo
 * @property string $data
 * @property double $valor
 */
class Qcost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qcost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['custo', 'data', 'valor', 'modelo'], 'required'],
            [['data'], 'safe'],
            [['valor'], 'number'],
            [['custo'], 'string', 'max' => 45],
            [['modelo'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'custo' => 'Custo',
            'data' => 'Data',
            'valor' => 'Valor',
            'modelo' => 'Modelo',
        ];
    }
}
