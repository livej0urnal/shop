<?php
use yii\helpers\Html;

?>


                    <li>
                        <?= Html::img($slide['image']) ?>
                        <div class="img-holder img-<?= $slide['id'] ?>"></div>
                        <div class="hero-holder text-center <?= $slide['class'] ?>">
                            <div class="hero-lines">
                                <h1 class="hero-heading white"><?= $slide['title'] ?></h1>
                                <p class="white"><?= $slide['description'] ?></p>
                            </div>
                            <a href="<?= $slide['link'] ?>" class="btn btn-lg btn-white"><span>Shop Now</span></a>
                        </div>
                    </li>
