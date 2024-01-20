<?php
/**
 * Team: NKUSaveSea
 * Coding by 张丽婷 2111190, 2023/12/19
 * 新闻model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class NewsForm extends Model
{
    public $Ntitle;
    public $Nauthor;
    public $Ndate;
    public $Ncontent;

    public function rules()
    {
        return [
            [['title', 'author'], 'required'],
        ];
    }
}