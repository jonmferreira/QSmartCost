<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Alert;

/**
 * AlertSearch represents the model behind the search form about `common\models\Alert`.
 */
class AlertSearch extends Alert
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_data', 'qty_defeito', 'total_qty', 'amostra'], 'integer'],
            [['asn', 'divisao', 'modelo', 'part_number', 'part_name', 'forncedor', 'comentario'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Alert::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_data' => $this->id_data,
            'qty_defeito' => $this->qty_defeito,
            'total_qty' => $this->total_qty,
            'amostra' => $this->amostra,
        ]);

        $query->andFilterWhere(['like', 'asn', $this->asn])
            ->andFilterWhere(['like', 'divisao', $this->divisao])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'part_number', $this->part_number])
            ->andFilterWhere(['like', 'part_name', $this->part_name])
            ->andFilterWhere(['like', 'forncedor', $this->forncedor])
            ->andFilterWhere(['like', 'comentario', $this->comentario]);

        return $dataProvider;
    }
}
