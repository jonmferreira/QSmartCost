<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Item;

/**
 * ItemSearch represents the model behind the search form of `common\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'statusrohs'], 'integer'],
            [['nome', 'data_teste', 'situacao','comentario','part_number','judge'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Item::find();

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
            'data_teste' => $this->data_teste,
            'statusrohs' => $this->statusrohs,
            'comentario' => $this->comentario,
            'part_number' => $this->part_number,
            'judge' => $this->judge,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'situacao', $this->situacao])->andFilterWhere(['like', 'comentario', $this->comentario])->andFilterWhere(['like', 'part_number', $this->part_number])->andFilterWhere(['like', 'judge', $this->judge]);

        return $dataProvider;
    }
}
