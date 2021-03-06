<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $success bool */

    $this->title = 'Результат генерации топ тэгов';
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class="tag-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
            if($success) { ?>
                <div class="alert alert-success" role="alert">Список успешно сгенерирован</div>
            <?php }
            else { ?>
                <div class="alert alert-danger" role="alert">Что-то прошло не так</div>
           <?php }
        ?>
        
    </p>    

</div>
