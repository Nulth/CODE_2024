<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
</head>

<body>
    <h1>Add Product</h1>
    <form action="index.php?act=addproduct" method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Price:</label>
        <input type="number" name="price" required><br>
        <label>View:</label>
        <input type="number" name="view" required><br>
        <input type="submit" value="Add Product">
    </form>
</body>

</html>