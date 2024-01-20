<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property int $Lid
 * @property string $Lname
 * @property string $Lherf
 * @property string $Lintro
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Lid', 'Lname', 'Lherf', 'Lintro'], 'required'],
            [['Lid'], 'integer'],
            [['Lintro'], 'string'],
            [['Lname', 'Lherf'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Lid' => 'Lid',
            'Lname' => 'Lname',
            'Lherf' => 'Lherf',
            'Lintro' => 'Lintro',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LinksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LinksQuery(get_called_class());
    }
}
