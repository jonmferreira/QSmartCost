<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "line_audit_auditoria".
 *
 * @property integer $id
 * @property string $data
 * @property string $line
 * @property string $auditor
 */
class LineAuditAuditoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'line_audit_auditoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['line', 'auditor'], 'required'],
            [['line', 'auditor'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'line' => 'Line',
            'auditor' => 'Auditor',
        ];
    }
}
