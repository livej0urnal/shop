<?php
use yii\helpers\Html;
use app\models\Blog;
use app\models\Article;
use yii\widgets\LinkPager;

?>
<!-- Blog Standard -->
<section class="section-wrap blog-standard pb-50">
    <div class="container relative">
        <div class="row">
            <?php if (!empty($articles)) : ?>
                <!-- content -->
                <div class="col-md-9 post-content mb-50">
                    <?php foreach ($articles as $article) : ?>
                        <!-- standard post -->
                        <article class="entry-item">
                            <div class="entry-img">
                                <a href="<?= \yii\helpers\Url::to(['single', 'id'=>$article['id']]) ?>">
                                    <?= Html::img("@web/img/blog/{$article->img}" , ['alt' => $article->name ]) ?>
                                </a>
                            </div>

                            <div class="entry-wrap">
                                <div class="entry">
                                    <h2 class="entry-title">
                                        <a href="<?= \yii\helpers\Url::to(['single', 'id'=>$article['id']]) ?>"><?= $article->name ?></a>
                                    </h2>
                                    <ul class="entry-meta">
                                        <li class="entry-date">
                                            <?php
                                            $data = $article->created_up;
                                            $data = Yii::$app->formatter->asDate($article->created_up , 'long')
                                            ?>
                                            <?= $data ; ?>
                                        </li>
                                        <li class="entry-category">
                                            <a href="<?= \yii\helpers\Url::to(['category', 'id'=>$article->blog['id']]) ?>"><?= $article->blog->name; ?></a>
                                        </li>
                                        <li class="entry-author">
                                           <?= $article->author ?>
                                        </li>
                                    </ul>
                                    <div class="entry-content">
                                        <p><?= $article->description ?></p>
                                        <a href="<?= \yii\helpers\Url::to(['single', 'id'=>$article['id']]) ?>" class="btn btn-md btn-light"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </article> <!-- end standard post -->

                    <?php endforeach; ?>
                    <!-- Pagination -->
                    <div class="text-center">
                        <?php echo LinkPager::widget([
                            'pagination' => $pages,
                            'options' => ['class' => 'pagination right clear'],
                            'linkOptions' => ['class' => 'link-pagination'],
                        ]); ?>
                    </div>
                </div> <!-- end col -->

                       <!-- Sidebar -->
                <aside class="col-md-3 sidebar">




                    <?php if (!empty($recent)) : ?>
                        <!-- Recent Posts -->
                        <div class="widget recent-posts">

                            <h3 class="widget-title heading uppercase">Recent Posts</h3>

                            <div class="entry-list w-thumbs">
                                <ul class="posts-list">
                                    <?php foreach ($recent as $post) : ?>
                                        <li class="entry-li">
                                            <article class="post-small clearfix">
                                                <div class="entry-img">
                                                    <a href="<?= \yii\helpers\Url::to(['single', 'id'=>$post['id']]) ?>">
                                                        <?= Html::img("@web/img/blog/{$post->recent_img}" , ['alt' => $post->name ]) ?>
                                                    </a>
                                                </div>
                                                <div class="entry">
                                                    <h3 class="entry-title"><a href="<?= \yii\helpers\Url::to(['single', 'id'=>$post['id']]) ?>"><?= $post->name ?></a></h3>
                                                    <ul class="entry-meta list-inline">
                                                        <li class="entry-date">
                                                            <?= $post->author ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>

                        </div>
                    <?php endif; ?>




                </aside> <!-- end sidebar -->
            <?php else: ?>
                <h4 style="text-align: center;">No articles</h4>
            <?php endif; ?>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end blog standard -->