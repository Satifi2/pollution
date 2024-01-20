<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "officer".
 *
 * @property int $oid
 * @property string $oname
 * @property string|null $ocountry
 * @property string|null $odescription
 */
class Officer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'officer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oid', 'oname'], 'required'],
            [['oid'], 'integer'],
            [['odescription'], 'string'],
            [['oname', 'ocountry'], 'string', 'max' => 255],
            [['oid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'oid' => 'Oid',
            'oname' => 'Oname',
            'ocountry' => 'Ocountry',
            'odescription' => 'Odescription',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OfficerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OfficerQuery(get_called_class());
    }
}
