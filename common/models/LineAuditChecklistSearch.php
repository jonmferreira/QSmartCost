<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LineAuditChecklist;

/**
 * LineAuditChecklistSearch represents the model behind the search form about `common\models\LineAuditChecklist`.
 */
class LineAuditChecklistSearch extends LineAuditChecklist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['secao', 'item', 'detalhes', 'especificacao', 'periodo'], 'safe'],
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
        $query = LineAuditChecklist::find();

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
        ]);

        $query->andFilterWhere(['like', 'secao', $this->secao])
            ->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'detalhes', $this->detalhes])
            ->andFilterWhere(['like', 'especificacao', $this->especificacao])
            ->andFilterWhere(['like', 'periodo', $this->periodo]);

        return $dataProvider;
    }
}
