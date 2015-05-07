<?php
/**
 * @var $this yii\web\View
 * @var $post common\models\Post
 * @var $image common\models\Asset
**/
Yii::$app->formatter->locale = 'ru-RU';
?>

<div class="post-page">
 	<div class="top-block">
 		<div class="date-icon"></div>
 		<div class="date-text"><?= Yii::$app->formatter->asDate(strtotime($post->created_at),'full') ?></div>
 		<div class="comments-count"><?= $post->comments_count ?></div>
 		<div class="comments-icon"></div>
 	</div>
 	<div class="main-img-text-block">
 		<div class="main-text">
			<?php if(!empty($image->getFileUrl())) { ?>
 				<img src="<?= $image->getFileUrl() ?>">
			 <?php } ?>
 			<div class="title"><?= $post->title ?></div>
 			<div class="content">
				 <?= \kartik\markdown\Markdown::convert($post->content) ?>
			 </div>
 		</div>
        <div class="footer-part-top">
            <?php if(!empty($post->source_title)) { ?>
                <div class="source">Источник:</div>
                <a class="source-link" href="<?= $post->source_url ?>"><?= $post->source_title ?></a>
            <?php } ?>
			<?php
				$tags = explode(',',$post->cached_tag_list);
				foreach($tags as $tag) {
                    $tag = trim($tag);
			    ?>
                    <a class="tag" href="/search?t=<?= $tag ?>">#<?= $tag ?></a>
			<?php } ?>
            <div class="clearfix"></div>
        </div>

        <div class="footer-part-bottom">
            <a href="#">
                <div class="vk-likes">
                    <div class="count">37</div>
                </div>
            </a>
            <a href="#">
                <div class="fb-likes">
                    <div class="count">11</div>
                </div>
            </a>

            <a href="#"><div class="button mail"></div></a>
            <a href="#"><div class="button ok"></div></a>
            <a href="#"><div class="button write"></div></a>
            <a href="#"><div class="button twitter"></div></a>
            <a href="#"><div class="button fb"></div></a>
            <a href="#"><div class="button vk"></div></a>

            <div class="clearfix"></div>
        </div>

 		<div class="clearfix"></div>
 	</div>
 </div>