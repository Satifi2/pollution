<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

/**
 * This is the ActiveQuery class for [[Substances]].
 *
 * @see Substances
 */
class SubstancesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Substances[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Substances|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
