<?php foreach ($products as $product): ?>
    <p>
        Category: <?= $product->category->title ?> |
        Product: <?= $product->title . ' | $' . $product->price ?>
    </p>
<?php endforeach; ?>