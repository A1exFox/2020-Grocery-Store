<?php

use yii\helpers\Html;

/**
 * @var $this yii\web\View
 * @var $content string
 */

$this->beginPage() ?>
<html>

<head>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>
</head>

<body>
    <?php $this->beginBody(); ?>

    <header style="padding:20px;background-color:burlywood">
        Header::<?= $this->blocks['block'] ?>
    </header>
    <main style="padding:20px;">
        <?= $content ?>
    </main>
    <footer style="padding:20px;background-color:burlywood">
        Footer::<?= $this->blocks['block'] ?>
    </footer>

    <?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage() ?>