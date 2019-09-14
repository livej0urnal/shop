<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
    <!-- 404 -->
    <section class="section-wrap page-404">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <h1>404</h1>
                    <h2 class="mb-50">Page Not Found</h2>
                    <p class="mb-20">You can go back to <a href="/">Homepage</a> or use search</p>
                    <form class="relative">
                        <input type="search" placeholder="Search" class="mb-0">
                        <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </section> <!-- end 404 -->
