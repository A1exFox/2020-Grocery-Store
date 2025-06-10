<h1>Hello world</h1>
<?= $this->render('inc') ?>
<?= $this->render('/inc/test.html') ?>
<p><?= $name ?></p>
<p><?= $age ?></p>
<p><?= $this->context->my_var ?></p>
<p><?= $this->params['t1'] ?></p>

<?php debug($this->params) ?>
<?php $this->params['t2'] = 't2 params' ?>
<p><?= $this->params['t2'] ?></p>

<?php $this->beginBlock('block1'); ?>

<p><?= $this->params['t2'] ?></p>
<p>содержимое блока 1.....</p>

<?php $this->endBlock('block1'); ?>