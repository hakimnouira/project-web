<?php
include '../Controller/productC.php';
$productC = new productC();
$list = $productC->listproduct();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of clients</h1>
        <h2>
            <a href="addClient.php">Add Client</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Client</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $product) {
        ?>
            <tr>
                <td><?= $product['product_id']; ?></td>
                <td><?= $product['product_name']; ?></td>
                <td><?= $product['product_des']; ?></td>
                <td><?= $product['product_price']; ?></td>
                <td><?= $product['product_img']; ?></td>
                <td><?= $product['product_quantity']; ?></td>
                <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $client['idClient']; ?> name="idClient">
                    </form>
                </td>
                <td>
                    <a href="deleteClient.php?idClient=<?php echo $client['idClient']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>