<?php
/**
 * Team: NKUsavesea
 * Coding by 林子淳 2114042, 20231215
 * 此视图文件用于展示与日本核废水排放事件相关的官员信息。
 */

/* @var $this yii\web\View */           
/* @var $officers \common\models\Officer[] */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

// 设置页面标题
$this->title = '日本核废水排放相关人物介绍';
$this->params['breadcrumbs'][] = $this->title;
$officerNum=1;
?>
<div>
    <h1 class="officer-title">日本核废水排放事件相关人物</h1>
</div>
<div>
    <div class="officer-intro">
    自2011年福岛核电站事故发生后，日本政府及其相关国际组织已持续致力于核废水处理问题的解决方案。这场事故引发了全球广泛关注，并在环境保护、海洋生态、公共健康及国际法律责任等多个层面上激发了深入讨论。在处理福岛核电站释放的废水问题时，一方面，专家和官员面临着技术和科学上的挑战，如何安全有效地减少核废水的放射性水平，同时也要评估和缓解可能对周边环境和居民健康带来的风险。

    另一方面，公众对于废水处理和排放的担忧，特别是在周边国家如中国和韩国，这些国家对可能对其海域产生影响的决策表达了担忧和反对。国际环保组织和地区国家要求日本政府提供透明的信息，并探索更安全的废水处理方法。他们主张，在采取任何排放行动之前，应充分评估所有可能的环境影响，并进行国际同行的科学评审。
    </div>
    <ul>
    <div class="officer-shell">
    <?php foreach ($officers as $officer): ?>
    <div class="officer-item">
        <div class="officer-img-div">
            <?php
            $officerjpg = "../web/images/{$officerNum}.png"; 
            echo "<img class='officer-img' src='{$officerjpg}' alt='Image of {$officer->oname}'>";//动态生成并展示官员照片
            ?>
        </div>
        <h3 class="officer-name"><?= Html::encode("{$officer->oname}") ?></h3>
        <p class="officer-country"><?= Html::encode("{$officer->ocountry}") ?></p>
        <p class="officer-description"><?= Html::encode("{$officer->odescription}") ?></p>
    </div>
    <?php
    $officerNum++;
    ?>
<?php endforeach; ?>
    </div>
    <div class="officer-footer">
    综上所述，福岛核废水排放事件强化了环境保护的紧迫性，同时也提醒国际社会，面对全球性环境和安全问题，需要共同协商、透明交流和积极参与，以便在保护地球环境和促进人类福祉之间取得平衡。在寻找解决方案的过程中，世界各国必须集思广益，共同努力以保护我们共有的这个星球。
    </div>
    </ul>
</div>
