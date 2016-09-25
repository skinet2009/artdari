<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= $news->title; ?>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12">
                <img src="<?= $news->image; ?>" class="img-responsive" />
            </div>
            <div class="col-xs-12">
                <?= $news->preview; ?>
                <hr>
                <?= $news->content; ?>
            </div>
            <div class="col-xs-12">
                <div class="pull-right">
                    <span class="btn btn-success ml5 mr5">
                        <i class="glyphicon glyphicon-thumbs-up"></i>
                        <?= $news->ilike; ?>
                    </span>
                    <span class="btn btn-danger ml5 mr5">
                        <i class="glyphicon glyphicon-thumbs-down"></i>
                        <?= $news->idislike; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
