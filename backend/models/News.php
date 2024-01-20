<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $Nid
 * @property string|null $Ntitle
 * @property string|null $Nauthor
 * @property string|null $Ndate
 * @property string|null $Ncontent
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nid'], 'required'],
            [['Nid'], 'integer'],
            [['Ndate'], 'safe'],
            [['Ncontent'], 'string'],
            [['Ntitle', 'Nauthor'], 'string', 'max' => 255],
            [['Nid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nid' => 'Nid',
            'Ntitle' => 'Ntitle',
            'Nauthor' => 'Nauthor',
            'Ndate' => 'Ndate',
            'Ncontent' => 'Ncontent',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
