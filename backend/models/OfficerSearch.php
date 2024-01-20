<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Officer;

/**
 * OfficerSearch represents the model behind the search form of `app\models\Officer`.
 */
class OfficerSearch extends Officer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oid'], 'integer'],
            [['oname', 'ocountry', 'odescription'], 'safe'],
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
        $query = Officer::find();

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
            'oid' => $this->oid,
        ]);

        $query->andFilterWhere(['like', 'oname', $this->oname])
            ->andFilterWhere(['like', 'ocountry', $this->ocountry])
            ->andFilterWhere(['like', 'odescription', $this->odescription]);

        return $dataProvider;
    }
}
