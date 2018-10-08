<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Loadtest;

/**
 * LoadtestSearch represents the model behind the search form about `common\models\Loadtest`.
 */
class LoadtestSearch extends Loadtest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item', 'departure_date', 'receipt_date', 'inicio_inspecao', 'fim_inspecao'], 'safe'],
            [['id', 'status'], 'integer'],
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
        $query = Loadtest::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'departure_date', $this->departure_date])
            ->andFilterWhere(['like', 'receipt_date', $this->receipt_date])
            ->andFilterWhere(['like', 'inicio_inspecao', $this->inicio_inspecao])
            ->andFilterWhere(['like', 'fim_inspecao', $this->fim_inspecao]);

        return $dataProvider;
    }
}
