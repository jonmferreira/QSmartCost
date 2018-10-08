<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "calc_z_testes".
 *
 * @property integer $id
 * @property string $modelo
 * @property double $valor_capacidade
 * @property double $valor_eer
 * @property double $valor_power
 * @property string $data
 * @property string $inspetor
 */
class CalcZTestes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calc_z_testes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modelo', 'valor_capacidade', 'valor_eer', 'valor_power', 'inspetor'], 'required'],
            [['valor_capacidade', 'valor_eer', 'valor_power'], 'number'],
            [['data'], 'safe'],
            [['modelo', 'inspetor'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modelo' => 'Modelo',
            'valor_capacidade' => 'Capacidade',
            'valor_eer' => 'EER',
            'valor_power' => 'Power',
            'data' => 'Data',
            'inspetor' => 'Inspetor',
        ];
    }
}
