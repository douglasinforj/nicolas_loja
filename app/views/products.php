<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <?php if (empty($products)): ?>
        <p>Nenhum produto disponível.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($products as $id => $product): ?>
                <li>
                    <strong><?= htmlspecialchars($product['name']); ?></strong> - <?= htmlspecialchars($product['price']); ?> R$
                    <form action="/add-to-cart" method="post" style="display: inline;">
                        <input type="hidden" name="product_id" value="<?= htmlspecialchars($id); ?>">
                        <button type="submit">Adicionar ao Carrinho</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <a href="/cart">Ver Carrinho</a>
</body>
</html>
