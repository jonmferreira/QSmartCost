<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "alert".
 *
 * @property integer $id
 * @property string $id_data
 * @property string $asn
 * @property string $divisao
 * @property integer $qty_defeito
 * @property integer $total_qty
 * @property integer $amostra
 * @property string $modelo
 * @property string $part_number
 * @property string $part_name
 * @property string $forncedor
 * @property string $comentario
 * @var UploadedFile[]
 */
class Alert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alert';
    }

    /**
     * @inheritdoc
     */
	 
	 public $imageFiles;
	
    public function rules()
    {
        return [
            [['id_data', 'asn', 'divisao', 'qty_defeito', 'total_qty', 'amostra', 'modelo', 'part_number', 'part_name', 'forncedor', 'comentario', 'imageFiles'], 'required'],
            [['id_data', 'qty_defeito', 'total_qty', 'amostra'], 'integer'],
            [['comentario'], 'string'],
            [['asn'], 'string', 'max' => 45],
            [['divisao'], 'string', 'max' => 15],
            [['modelo', 'part_number', 'forncedor'], 'string', 'max' => 50],
            [['part_name'], 'string', 'max' => 90],
			[['imageFiles'], 'file', 'skipOnEmpty' => false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_data' => 'Id Data',
            'asn' => 'Asn',
            'divisao' => 'Divisao',
            'qty_defeito' => 'Qty Defeito',
            'total_qty' => 'Total Qty',
            'amostra' => 'Amostra',
            'modelo' => 'Modelo',
            'part_number' => 'Part Number',
            'part_name' => 'Part Name',
            'forncedor' => 'Forncedor',
            'comentario' => 'Comentario',
			'imageFiles' => 'Imagem',
        ];
    }
	
	public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
                $file->saveAs($file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}
