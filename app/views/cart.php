<!DOCTYPE html>
<html>
<head>
    <title>Carrinho</title>
</head>
<body>
    <h1>Seu Carrinho</h1>

    <?php if (empty($cartProducts)): ?>
        <p>O carrinho está vazio.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartProducts as $product): ?>
                    <tr>
                        <td><?= htmlspecialchars($product['name']); ?></td>
                        <td><?= htmlspecialchars($product['quantity']); ?></td>
                        <td><?= htmlspecialchars($product['price']); ?> R$</td>
                        <td><?= htmlspecialchars($product['subtotal']); ?> R$</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p><strong>Total:</strong> 
            <?= htmlspecialchars(array_sum(array_column($cartProducts, 'subtotal'))); ?> R$
        </p>
    <?php endif; ?>

    <a href="/">Voltar aos Produtos</a>
</body>
</html>
