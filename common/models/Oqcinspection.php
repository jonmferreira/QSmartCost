<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "oqc_inspection".
 *
 * @property string $model
 * @property string $sufix
 * @property string $name
 */
class Oqcinspection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oqc_inspection';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'sufix', 'name'], 'required'],
            [['model', 'sufix', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'model' => 'Modelo',
            'sufix' => 'Sufixo',
            'name' => 'Nome',
        ];
    }
}
