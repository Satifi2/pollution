<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Links;

/**
 * LinksSearch represents the model behind the search form of `app\models\Links`.
 */
class LinksSearch extends Links
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Lid'], 'integer'],
            [['Lname', 'Lherf', 'Lintro'], 'safe'],
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
        $query = Links::find();

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
            'Lid' => $this->Lid,
        ]);

        $query->andFilterWhere(['like', 'Lname', $this->Lname])
            ->andFilterWhere(['like', 'Lherf', $this->Lherf])
            ->andFilterWhere(['like', 'Lintro', $this->Lintro]);

        return $dataProvider;
    }
}
