<?php foreach ($products as $product): ?>
    <div>
        <h3><?= htmlspecialchars($product['name']); ?></h3>
        <p><?= htmlspecialchars($product['description']); ?></p>
        <p>Preço: <?= htmlspecialchars($product['price']); ?> R$</p>
        <form action="/add-to-cart" method="POST">
            <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['id']); ?>">
            <button type="submit">Adicionar ao carrinho</button>
        </form>
    </div>
<?php endforeach; ?>
