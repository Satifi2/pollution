<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "background".
 *
 * @property int $Bid
 * @property string $Bname
 * @property string $Btime
 * @property string $Ber
 * @property string $Bintro
 */
class Background extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'background';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Bid', 'Bname', 'Btime', 'Ber', 'Bintro'], 'required'],
            [['Bid'], 'integer'],
            [['Bintro'], 'string'],
            [['Bname', 'Btime', 'Ber'], 'string', 'max' => 255],
            [['Bid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Bid' => 'Bid',
            'Bname' => 'Bname',
            'Btime' => 'Btime',
            'Ber' => 'Ber',
            'Bintro' => 'Bintro',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BackgroundQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BackgroundQuery(get_called_class());
    }
}
