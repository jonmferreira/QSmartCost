<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "line_audit_results".
 *
 * @property integer $id
 * @property integer $id_auditoria
 * @property integer $id_checklist
 * @property string $result
 * @property string $foto
 * @property string $obs
 */
class LineAuditResults extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'line_audit_results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_auditoria', 'id_checklist'], 'required'],
            [['id_auditoria', 'id_checklist'], 'integer'],
            [['result'], 'string', 'max' => 5],
            [['foto', 'obs'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_auditoria' => 'Id Auditoria',
            'id_checklist' => 'Id Checklist',
            'result' => 'Result',
            'foto' => 'Foto',
            'obs' => 'Obs',
        ];
    }
}
