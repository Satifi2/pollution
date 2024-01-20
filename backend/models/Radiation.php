<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "radiation".
 *
 * @property int $Sid
 * @property string $Sname
 * @property int $Snumber
 * @property string $Stime
 */
class Radiation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radiation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Sid', 'Sname', 'Snumber', 'Stime'], 'required'],
            [['Sid', 'Snumber'], 'integer'],
            [['Stime'], 'safe'],
            [['Sname'], 'string', 'max' => 255],
            [['Sid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Sid' => 'Sid',
            'Sname' => 'Sname',
            'Snumber' => 'Snumber',
            'Stime' => 'Stime',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RadiationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RadiationQuery(get_called_class());
    }
}
