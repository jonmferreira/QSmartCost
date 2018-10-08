<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inspectionscontrol".
 *
 * @property integer $id
 * @property string $item
 * @property string $item_name
 * @property string $fornecedor
 * @property string $method
 * @property integer $count
 * @property integer $count_date
 * @property string $persist
 * @property string $reason
 * @property string $tipo
 */
class Inspectionscontrol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inspectionscontrol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item', 'item_name', 'fornecedor', 'method', 'count', 'count_date', 'persist', 'reason', 'tipo'], 'required'],
            [['count', 'count_date'], 'integer'],
            [['item', 'item_name', 'fornecedor', 'method', 'persist', 'reason'], 'string', 'max' => 100],
            [['tipo'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item' => 'Item',
            'item_name' => 'Item Name',
            'fornecedor' => 'Fornecedor',
            'method' => 'Method',
            'count' => 'Count Lot',
            'count_date' => 'Count Date',
            'persist' => 'Persist',
            'reason' => 'Reason',
            'tipo' => 'Tipo',
        ];
    }
	
	public function Balance($model)
	{
		$connection = Yii::$app->getDb();
		$command = $connection->createCommand("SELECT * FROM  count WHERE partNumber LIKE '$model->item' ORDER BY data DESC");
		$contador = 0;
		$result = $command->queryAll();
		foreach ($result as $perk) {
			if($perk['resultado'] == 'OK'){
			$contador++;
		}else{
			break;
		}
      }
	  
	  if($contador <= $model->count){
		return $contador;
	  }else{
		return $model->count;
	  }
	}
}
