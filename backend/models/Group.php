<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $gid
 * @property string|null $gname
 * @property string|null $gdate
 * @property string|null $gschool
 * @property string|null $gdescription
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gdate'], 'safe'],
            [['gname', 'gschool', 'gdescription'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gid' => 'Gid',
            'gname' => 'Gname',
            'gdate' => 'Gdate',
            'gschool' => 'Gschool',
            'gdescription' => 'Gdescription',
        ];
    }

    /**
     * {@inheritdoc}
     * @return GroupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GroupQuery(get_called_class());
    }
}
