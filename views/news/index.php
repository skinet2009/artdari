<?php
    use yii\widgets\LinkPager;
    use yii\helpers\Url;

?>
<?php if (!empty($posts)) : ?>
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="panel-title">
                        Список новостей
                    </div>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <?php foreach ($links as $link) : ?>
                            <a
                                href="<?= Url::to([
                                        'news/view',
                                        'id' => $link->id
                                    ])?>"
                                class="list-group-item"
                            >
                                <?= $link->title; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xs-7">
            <?php foreach ($posts as $post) : ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="<?= Url::to([
                                    'news/view',
                                    'id' => $post->id
                                ])?>">
                                <?= $post->title; ?>
                            </a>

                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <img src="<?= $post->image; ?>" class="img-responsive" />
                            </div>
                            <div class="col-xs-8">
                                <p>
                                    <?= $post->preview; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <?=  LinkPager::widget([
                    'pagination' => $pages,
                ]) ?>
        </div>
    </div>

<?php endif; ?>
