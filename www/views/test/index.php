<h1>Hello world</h1>
<?= $this->render('inc') ?>
<?= $this->render('/inc/test.html') ?>
<p><?= $name ?></p>
<p><?= $age ?></p>
<p><?= $this->context->my_var ?></p>
<p><?= $this->params['t1'] ?></p>