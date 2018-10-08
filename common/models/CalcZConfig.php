<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "calc_z_config".
 *
 * @property string $modelo
 * @property double $valor_capacidade
 * @property double $valor_eer
 * @property double $valor_power
 */
class CalcZConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calc_z_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modelo', 'valor_capacidade', 'valor_eer', 'valor_power'], 'required'],
            [['valor_capacidade', 'valor_eer', 'valor_power'], 'number'],
            [['modelo'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'modelo' => 'Modelo',
            'valor_capacidade' => 'Capacidade',
            'valor_eer' => 'EER',
            'valor_power' => 'Power',
        ];
    }
}
