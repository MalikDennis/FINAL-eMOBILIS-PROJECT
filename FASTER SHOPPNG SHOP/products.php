<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FASTER SHOPPING SHOP | PRODUCTS</title>
    <script src="assets/bootsrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootsrap/js/popper.min.js"></script>
    <script src="assets/bootsrap/js/bootsrap.js"></script>
    <link rel="stylesheet" href="bootsrap/css/bootsrap.css">
</head>
<body>
<table class="table table-dark table-hover">
    <tr>
        <th>Product name</th>
        <th>Product quantity</th>
        <th>Product price</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //start connecting to the database
    require 'db_conection.php';
    //display data, prepare a select query
    $select_query="SELECT * FROM 'products'WHERE";
    //execute the query and display the records on table rows
    $products=mysqli_query($conn,$select_query);
    //look through the data to display each row at a time
    while($row=mysqli_fetch_assoc($products)){
        extract ($row);
        echo "<tr>
                <td>$name</td>
                <td>$quantity</td>
                <td>$price</td>
                <td><a href='#' class='btn btn-danger btn-block'>delete</a></td>
                <td><a href='#' class='btn btn-primary btn-block'></a>update</td>
              </tr>";

    }
    ?>
</table>
</body>
</html>
