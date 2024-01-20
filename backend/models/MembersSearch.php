<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Members;

/**
 * MembersSearch represents the model behind the search form of `app\models\Members`.
 */
class MembersSearch extends Members
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mid'], 'integer'],
            [['mname', 'mdescription', 'mgroup'], 'safe'],
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
        $query = Members::find();

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
            'mid' => $this->mid,
        ]);

        $query->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'mdescription', $this->mdescription])
            ->andFilterWhere(['like', 'mgroup', $this->mgroup]);

        return $dataProvider;
    }
}
