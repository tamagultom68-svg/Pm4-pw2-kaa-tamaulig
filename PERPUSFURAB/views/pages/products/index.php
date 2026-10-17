<?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= htmlspecialchars($product['name']) ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['stock'] ?></td>
    </tr>
<?php endforeach; ?>
