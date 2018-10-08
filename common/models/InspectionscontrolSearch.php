<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Inspectionscontrol;

/**
 * InspectionscontrolSearch represents the model behind the search form about `common\models\Inspectionscontrol`.
 */
class InspectionscontrolSearch extends Inspectionscontrol
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item', 'item_name', 'fornecedor', 'method', 'persist', 'reason'], 'safe'],
            [['count'], 'integer'],
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
        $query = Inspectionscontrol::find();

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
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'fornecedor', $this->fornecedor])
            ->andFilterWhere(['like', 'method', $this->method])
            ->andFilterWhere(['like', 'persist', $this->persist])
            ->andFilterWhere(['like', 'reason', $this->reason]);

        return $dataProvider;
    }
}
