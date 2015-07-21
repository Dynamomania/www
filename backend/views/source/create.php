<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Source */

$this->title = 'Добавить источник';
$this->params['breadcrumbs'][] = ['label' => 'Источники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="source-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
