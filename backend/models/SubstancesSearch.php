<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Substances;

/**
 * SubstancesSearch represents the model behind the search form of `app\models\Substances`.
 */
class SubstancesSearch extends Substances
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Sid'], 'integer'],
            [['Sname', 'Selement', 'Sintro', 'Slink'], 'safe'],
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
        $query = Substances::find();

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
            'Sid' => $this->Sid,
        ]);

        $query->andFilterWhere(['like', 'Sname', $this->Sname])
            ->andFilterWhere(['like', 'Selement', $this->Selement])
            ->andFilterWhere(['like', 'Sintro', $this->Sintro])
            ->andFilterWhere(['like', 'Slink', $this->Slink]);

        return $dataProvider;
    }
}
