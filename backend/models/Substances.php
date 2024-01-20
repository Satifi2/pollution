<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "substances".
 *
 * @property int $Sid
 * @property string $Sname
 * @property string $Selement
 * @property string $Sintro
 * @property string $Slink
 */
class Substances extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'substances';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Sid', 'Sname', 'Selement', 'Sintro', 'Slink'], 'required'],
            [['Sid'], 'integer'],
            [['Sintro'], 'string'],
            [['Sname', 'Selement', 'Slink'], 'string', 'max' => 255],
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
            'Selement' => 'Selement',
            'Sintro' => 'Sintro',
            'Slink' => 'Slink',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SubstancesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SubstancesQuery(get_called_class());
    }
}
