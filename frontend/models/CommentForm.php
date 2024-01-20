<?php
/**
* Team: NKUsavesea
* Coding by 林子淳 2114042, 20231217
* 评论模型表单
*/
namespace frontend\models;

use Yii;
use yii\base\Model;

class CommentForm extends Model
{
    public $user;
    public $comment;

    public function rules()
    {
        return [
            [['user', 'comment'], 'required'],
        ];
    }
}
