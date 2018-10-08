<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LineAuditResults;

/**
 * LineAuditResultsSearch represents the model behind the search form about `common\models\LineAuditResults`.
 */
class LineAuditResultsSearch extends LineAuditResults
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_auditoria', 'id_checklist'], 'integer'],
            [['result', 'foto', 'obs'], 'safe'],
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
    public function search($params, $id_auditoria)
    {
        $query = LineAuditResults::find();

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
            'id_auditoria' => $id_auditoria,
            'id_checklist' => $this->id_checklist,
        ]);

        $query->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'obs', $this->obs]);

        return $dataProvider;
    }
}
