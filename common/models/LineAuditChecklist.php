<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "line_audit_checklist".
 *
 * @property integer $id
 * @property string $secao
 * @property string $item
 * @property string $detalhes
 * @property string $especificacao
 * @property string $periodo
 */
class LineAuditChecklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'line_audit_checklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['secao', 'item', 'detalhes', 'especificacao', 'periodo'], 'required'],
            [['especificacao'], 'string'],
            [['secao', 'item', 'detalhes'], 'string', 'max' => 100],
            [['periodo'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'secao' => 'Seção',
            'item' => 'Item',
            'detalhes' => 'Detalhes',
            'especificacao' => 'Especificação',
            'periodo' => 'Período',
        ];
    }
}
