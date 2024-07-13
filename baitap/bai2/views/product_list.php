<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
</head>

<body>
    <h1>Product List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>View</th>
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['view']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php?act=addproduct">Add Product</a>
</body>

</html>