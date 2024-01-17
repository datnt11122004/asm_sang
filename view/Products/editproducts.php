

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sửa thông tin khách hàng</h1>
    <form action="?url=edit_products&id=<?= $getproductsByID['id'] ?>" method="post">
        <input type="text" value="<?= $getproductsByID["ten_sp"] ?>" name="ten_sp">
        <input type="text" value="<?= $getproductsByID["mo_ta"]  ?>" name="mo_ta">
        <input type="text" value="<?= $getproductsByID["gia"]  ?>" name="gia">
        <button type="submit">Sửa thông tin</button>
    </form>
</body>

</html>