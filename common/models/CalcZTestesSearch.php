<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CalcZTestes;

/**
 * CalcZTestesSearch represents the model behind the search form about `common\models\CalcZTestes`.
 */
class CalcZTestesSearch extends CalcZTestes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['modelo', 'data', 'inspetor'], 'safe'],
            [['valor_capacidade', 'valor_eer', 'valor_power'], 'number'],
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
        $query = CalcZTestes::find();

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
            'valor_capacidade' => $this->valor_capacidade,
            'valor_eer' => $this->valor_eer,
            'valor_power' => $this->valor_power,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'inspetor', $this->inspetor]);

        return $dataProvider;
    }
}
