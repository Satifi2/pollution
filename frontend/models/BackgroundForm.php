<?php
/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 2023/12/19
 * 新闻背景Form
 */
namespace frontend\models;

use yii\db\ActiveRecord;

class BackgroundForm extends ActiveRecord
{
    public $Bname;
    public $Btime;
    public $Ber;
    public $Bintro;

    public function rules()
    {
        return [
            [['Bname'], 'required'],
        ];
    }
}
