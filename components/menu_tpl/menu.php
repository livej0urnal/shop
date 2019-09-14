
<a href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$category['id']]) ?>" class="links-menu"> <?= $category['name'] ?> </a>
<?php if(isset($category['childs']) ): ?>
<div class="col-md-3 megamenu-item">
    <h6><a href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$category['id']]) ?>"> <?= $category['name'] ?> </a></h6>
        <ul class="menu-list">
            <li>
                <?= $this->getMenuHtml($category['childs']) ?>
            </li>
        </ul>
</div>
<?php endif; ?>

