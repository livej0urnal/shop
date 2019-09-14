<?php
use yii\helpers\Html;
use app\models\Blog;
use app\models\Article;
use app\models\Comments;
use yii\widgets\LinkPager;
?>

<!-- Blog Single -->
<section class="section-wrap post-single pb-50">
    <div class="container relative">
        <div class="row">

            <!-- content -->
            <div class="col-md-9 post-content mb-50">
                <!-- standard post -->
                <article class="entry-item">
                    <div class="entry">
                        <h1 class="uppercase"><?= $article->name ?></h1>
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
                            <li class="entry-comments">

                               <?php if(!empty($comments)) : ?>
                                   <a href="#comments"><?php echo count($comments); ?> Comments</a>
                                <?php else : ?>
                                     0 Comments
                                <?php endif; ?>

                            </li>
                        </ul>
                        <div class="entry-img">
                            <?= Html::img("@web/img/blog/{$article->img}" , ['alt' => $article->name ]) ?>
                        </div>
                        <div class="entry-content">
                            <p><?= $article->content ?></p>




                            <!-- related posts -->
                            <div class="related-posts mt-60">
                                <h4 class="heading uppercase mb-30">Related Posts</h4>
                                <div class="row">
                                <?php foreach ($related as $relate) : ?>
                                    <div class="col-sm-4">
                                        <article>
                                            <div class="entry-img hover-scale">
                                                <a href="<?= \yii\helpers\Url::to(['single', 'id'=>$relate['id']]) ?>">
                                                    <?= Html::img("@web/img/blog/{$relate->related_img}" , ['alt' => $relate->name ]) ?>
                                                </a>
                                            </div>
                                            <div class="entry">
                                                <h4 class="entry-title"><a href="<?= \yii\helpers\Url::to(['single', 'id'=>$relate['id']]) ?>"><?= $relate->name ?></a></h4>
                                            </div>
                                        </article>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>


                            <?php if(!empty($comments)) : ?>

                            <div id="comments" class="entry-comments mt-20">
                                <h3 class="heading uppercase mb-40">comments</h3>

                                <ul class="comment-list">
                                    <?php foreach ($comments as $comment) : ?>
                                  <li>
                                        <div class="comment-body">
                                            <?= Html::img("@web/img/blog/{$comment->img_author}" , ['alt' => $comment->author, 'class' => 'comment-avatar']) ?>
                                            <div class="comment-content">
                                                <span class="comment-author"><?= $comment->author ?></span>
                                                    <p><?= $comment->content ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                            <?php else: ?>
                            <h3 class="heading uppercase mb-40">No comments</h3>
                            <?php endif; ?>

                            <div class="comment-form mt-60">
                                <h3 class="heading uppercase mb-40">Leave a Comment</h3>
                                <form id="form" method="post" action="#">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input name="name" id="name" type="text" placeholder="Name*">
                                        </div>
                                        <div class="col-md-4">
                                            <input name="mail" id="mail" type="email" placeholder="E-mail*">
                                        </div>
                                        <div class="col-md-4">
                                            <input name="Website" id="Website" type="text" placeholder="Website">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="comment" id="comment" placeholder="Comment" rows="8"></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-lg btn-color" value="Post Comment" id="submit-message">
                                </form>
                            </div>

                        </div>
                    </div>
                </article> <!-- end standard post -->
            </div> <!-- end col -->


            <!-- Sidebar -->
            <aside class="col-md-3 sidebar">

                <div class="widget categories">

                    <h3 class="widget-title heading uppercase">Categories</h3>
                    <ul class="list-no-dividers">
                        <?php foreach ($category as $categorys) : ?>
                            <li>
                                <a href="<?= \yii\helpers\Url::to(['category', 'id'=>$categorys['id']]) ?>"><?= $categorys->name ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

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

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end blog single -->
