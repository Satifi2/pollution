<?php
/**
* Team: NKUsavesea
* Coding by 林子淳 2114042, 20231217
* 评论模型，提供加入表单的功能
*/
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    static public function add($name, $comment){
        Yii::$app->db->createCommand()->insert('comment', [
                'cuser' => $name,
                'ccomment' => $comment,
                'cdate' => date('Y-m-d H-i-s', time())
            ])->execute();
    }
}
