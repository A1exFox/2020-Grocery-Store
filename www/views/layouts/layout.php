<?php

use yii\helpers\Html;

/**
 * @var $this \yii\web\View
 * @var $content string
 */

$this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody(); ?>

    <header style="padding:20px;background-color:burlywood">
        Header
    </header>
    <main style="padding:20px;">
        <?= $content ?>
    </main>
    <footer style="padding:20px;background-color:burlywood">
        Footer
    </footer>

    <?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage() ?>