<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAppAsset;

AdminAppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title>Admin panel | Fox store</title>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <!-- Google Fonts -->
    <?php $this->head() ?>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Favicons -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>



<?php $this->beginBody() ?>

<body>
<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="cyan darken-1">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s3 m3">
                    <span class="chapter-title">dashboard</span>
                </div>
                <ul class="right col s9 m3 nav-right-menu">
                    <li class="hide-on-small-and-down">
                        <a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large">
                            <i class="material-icons">notifications_none</i></a>
                        <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li class="no-padding">
                                        <a class="waves-effect waves-grey active" href="/" ><i class="material-icons logout">desktop_windows</i>Go Shop</a>
                                    </li>
                                </ul>
                            </li>
                        </ul></li>
                </ul>
            </div>
        </nav>
    </header>
    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="/dashboard/images/profile-image.png" class="circle" alt="">
                </div>
                <div class="sidebar-profile-info">
                    <a href="javascript:void(0);" class="account-settings-link">
                        <span><?= Yii::$app->user->identity['username'] ?><i class="material-icons right">arrow_drop_down</i></span>
                    </a>
                </div>
            </div>
            <div class="sidebar-account-settings">
                <ul>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey">
                            <i class="material-icons">perm_identity</i>
                            Profile
                        </a>
                    </li>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey" href="<?= \yii\helpers\Url::to(['/site/logout']) ?>">
                            <i class="material-icons">exit_to_app</i>
                            Sign Out
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding"><a class="waves-effect waves-grey active" href="/admin/"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Products</i><i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/admin/product/create">Create</a></li>
                            <li><a href="/admin/product/index/">Update</a></li>
                            <li><a href="">Options</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">grid_on</i>Categories<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/admin/category/create">Create</a></li>
                            <li><a href="/admin/category/index/">Update</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey" href="/admin/slider/index"><i class="material-icons" >desktop_windows</i>Slider</a>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey" ><i class="material-icons">trending_up</i>Orders<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/admin/order/index">Update</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">tag_faces</i>Pages</a>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">subtitles</i>Blog<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/admin/blog/create">Create</a></li>
                            <li><a href="/admin/blog/index">Update</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">library_books</i>Articles<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/admin/article/create">Create</a></li>
                            <li><a href="/admin/article/index">Update</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">chat_bubble</i>Reviews<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Products</a></li>
                            <li><a href="/admin/blogcomments/index">Articles</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">settings</i>Settings</a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="mn-inner inner-active-sidebar">
        <div class="middle-content">
            <div class="row no-m-t no-m-b   card  card-content">
                <?= $content; ?>
            </div>
        </div>

    </main>

</div>
<div class="left-sidebar-hover"></div>

</body>

<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>
