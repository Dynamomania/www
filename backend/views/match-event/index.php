<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MatchEventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'События матчей';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="match-event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
            if(count(Yii::$app->getRequest()->getQueryParams()) > 0) {
                echo Html::a('Сброс', ['/'.Yii::$app->controller->id], ['class' => 'btn btn-primary']);
            } 
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            [
                'attribute' => 'match_id',
                'label' => 'Матч',
                'options' => ['width' => '250'],
                'value' => function($model) {
                    return $model->match->name;
                },
            ],
            [
                'label' => 'События матча',
                'attribute' => 'match_event_type_id',
                'value' => function($model) {
                    return $model->matchEventType->name;
                },
                'filter' => $matchFilter,
                'options' => ['width' => '120'],
            ],
            [
                'attribute' => 'composition_id',
                'label' => 'Игрок',
                'options' => ['width' => '250'],
                'value' => function($model) {
                    return $model->composition->name;
                },
            ],
            [
                'attribute' => 'minute',
                'label' => 'Минута',
                'options' => ['width' => '70'],
                'format' => 'html',
                'value' => function($model) {
                    if($model->additional_minute != NULL) {
                        return $model->minute."+".$model->additional_minute;
                    }
                    else {
                        return $model->minute;
                    }
                },
            ],
            [
                'attribute' => 'notes',
                'label' => 'Комментарий',
                'options' => ['width' => '370'],
                'format' => 'html',
            ],
            // 'substitution_id',
            // 'is_hidden',
            // 'position',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>

</div>
