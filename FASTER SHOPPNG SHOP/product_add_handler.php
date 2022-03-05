<?php
if (isset($_POST['btn_submit'])){
    //conect to the db
    require 'db_conection.php'
    //receive data from the user
    $product_name = mysqli_real_escape_string($connection,$_POST['pname']);
    $product_qty = mysqli_real_escape_string($connection,$_POST['qty']);
    $product_price = mysqli_real_escape_string($connection,$_POST['price']);

    //to save the data,prepare the insert query

    $insert_query="INSERT INTO 'products'('id','name','quantity','price')VALUES(null,' $product_name','  $product_qty','$product_price')";
    //Finally execute the query
    $save= mysqli($connection,$insert_query);

    //check if the dat has been saved
    if(!save){
        echo "failed submitting product";
    }else{
        header(string:"location:index.php");
    }
}
