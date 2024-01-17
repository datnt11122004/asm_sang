<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách khách hàng</h1>
    <a href="?url=addproducts">Thêm khách hàng</a>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Giá</th>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['ten_sp'] ?></td>
                    <td><?= $product['mo_ta'] ?></td>
                    <td><?= $product['gia'] ?></td>
                    <td><a href="?url=edit_products&id=<?=$product['id'] ?>">Edit</a></td>
                    <td><a href="?url=delete_products&id=<?=$product['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>