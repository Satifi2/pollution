<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120, 20231218
 * 
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class VictimForm extends Model
{
    public $title;
    public $author;
    public $date;
    public $content;

    public function rules()
    {
        return [
            [['title', 'author'], 'required'],
        ];
    }
}