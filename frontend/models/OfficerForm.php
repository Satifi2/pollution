<?php
/**
* Team: NKUsavesea
* Coding by 林子淳 2114042, 20231215
* 官员模型表单，用于收集和处理表单数据
*/
namespace frontend\models;

use Yii;
use yii\base\Model;

class OfficerForm extends Model
{
    public $name;
    public $country;
    public $description;

    public function rules()
    {
        return [
            [['name', 'country'], 'required'],
        ];
    }
}
