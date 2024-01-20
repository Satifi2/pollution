<?php
/**
 * Coding by 张丽婷 2111190，2023/12/17
 * 物质model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class SubstancesForm extends Model
{
    public $Sid;
    public $Sname;
    public $Selement;
    public $Sintro;
    public $Slink;

    public function rules()
    {
        return [
            [['sid', 'sname'], 'required'],
        ];
    }
}