<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120, 20231214
 * 底部链接model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class LinksForm extends Model
{
    public $Lname;
    public $Lherf;
    public $Lintro;

    public function rules()
    {
        return [
            [['Lname'], 'required'],
        ];
    }
}
