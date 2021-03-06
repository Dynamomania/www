<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ChampionshipPart */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Этапы турнира', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="championship-part-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот этап турнира?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'name',
                'label' => 'Название',
            ],
            [
                'attribute' => 'championship.name',
                'label' => 'Турнир',
            ],
        ],
    ]) ?>

</div>
