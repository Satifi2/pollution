<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "emissions".
 *
 * @property int $Oid
 * @property int $Onumber
 * @property string $Otime
 */
class Emissions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emissions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Oid', 'Onumber', 'Otime'], 'required'],
            [['Oid', 'Onumber'], 'integer'],
            [['Otime'], 'safe'],
            [['Oid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Oid' => 'Oid',
            'Onumber' => 'Onumber',
            'Otime' => 'Otime',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EmissionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmissionsQuery(get_called_class());
    }
}
