<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Load;

/**
 * LoadSearch represents the model behind the search form about `common\models\Load`.
 */
class LoadSearch extends Load
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asn', 'item', 'item_name', 'receipt_qty', 'departure_date', 'receipt_date', 'judgement', 'iqc_received', 'inicio_inspecao', 'fim_inspecao', 'status', 'inspetor_iqc'], 'safe'],
            [['tempo_inspecao'], 'integer'],
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
        $query = Load::find();

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
            'inicio_inspecao' => $this->inicio_inspecao,
            'fim_inspecao' => $this->fim_inspecao,
            'tempo_inspecao' => $this->tempo_inspecao,
        ]);

        $query->andFilterWhere(['like', 'asn', $this->asn])
            ->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'receipt_qty', $this->receipt_qty])
            ->andFilterWhere(['like', 'departure_date', $this->departure_date])
            ->andFilterWhere(['like', 'receipt_date', $this->receipt_date])
            ->andFilterWhere(['like', 'judgement', $this->judgement])
            ->andFilterWhere(['like', 'iqc_received', $this->iqc_received])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'inspetor_iqc', $this->inspetor_iqc]);

        return $dataProvider;
    }
}
