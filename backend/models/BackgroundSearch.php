<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Background;

/**
 * BackgroundSearch represents the model behind the search form of `app\models\Background`.
 */
class BackgroundSearch extends Background
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Bid'], 'integer'],
            [['Bname', 'Btime', 'Ber', 'Bintro'], 'safe'],
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
        $query = Background::find();

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
            'Bid' => $this->Bid,
        ]);

        $query->andFilterWhere(['like', 'Bname', $this->Bname])
            ->andFilterWhere(['like', 'Btime', $this->Btime])
            ->andFilterWhere(['like', 'Ber', $this->Ber])
            ->andFilterWhere(['like', 'Bintro', $this->Bintro]);

        return $dataProvider;
    }
}
