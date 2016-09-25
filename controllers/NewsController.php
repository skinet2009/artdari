<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveRecord;
use app\models\News;
use yii\data\Pagination;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $query = News::find()->select(`id`, `title`, `image`, `preview`)->orderBy('id DESC');
        $links = News::find()->select(`id`, `title`)->all();

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 5,
            'pageSizeParam' => false,
            'forcePageParam' => false,
        ]);

        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index', compact('posts', 'pages', 'links'));
    }

    public function actionView($id)
    {
        $news = News::find()->where([
            'id' => $id
        ])->one();

        return $this->render('view', compact('news'));
    }
}
