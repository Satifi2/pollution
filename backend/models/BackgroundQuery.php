<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

/**
 * This is the ActiveQuery class for [[Background]].
 *
 * @see Background
 */
class BackgroundQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Background[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Background|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
