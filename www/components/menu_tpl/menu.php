<?php if (!isset($category['children'])): ?>

    <li>
        <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>">
            <?= $category['title'] ?>
        </a>
    </li>

<?php else: ?>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= $category['title'] ?>
            <span class="caret"></span>
        </a>
        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
            <div class="w3ls_vegetables">
                <ul>
                    <?= $this->getMenuHtml($category['children']) ?>
                </ul>
            </div>
        </div>
    </li>

<?php endif; ?>