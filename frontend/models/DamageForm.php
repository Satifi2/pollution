<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120, 20231218
 * model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class DamageForm extends Model
{
    public $date;
    public $tank;
    public $tankAll;
    public $UAV;
    public $UAVAll;
    public $car;
    public $carAll;
    public function rules()
    {
        return [
            [['date'], 'required'],
        ];
    }
}