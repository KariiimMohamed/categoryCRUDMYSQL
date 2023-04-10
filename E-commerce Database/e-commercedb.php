<?php


    $conn = mysqli_connect("localhost" , "root" , "" , "e-commerce");

    $create_db = "CREATE DATABASE IF NOT EXISTS `e-commerce`";
    mysqli_query($conn , $create_db);


    $create_coustmer_table = "CREATE TABLE IF NOT EXISTS `coustmers` (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(30) ,
        lastname VARCHAR(30) ,
        email VARCHAR(50) NOT NULL,
        adress VARCHAR(100)
    )";
    if(mysqli_query($conn , $create_coustmer_table) ) {
        echo ' coustomer table done ' ;
    }

    // // INSERT DATA
    // $insert_coustmer_table = " INSERT INTO  `coustmers` ( firstname , lastname , email , adress ) VALUES (
    // 'Karim' , 'Mohamed' , 'karim@gmail.com' , 'Mansoura - Aga')";
    // mysqli_query($conn , $insert_coustmer_table);

    // $insert_coustmer_table = " INSERT INTO  `coustmers` ( firstname , lastname , email , adress ) VALUES (
    // 'Kareem' , 'Abd Elsalam' , '442002@gmail.com' , 'Mansoura - Aga')";
    // mysqli_query($conn , $insert_coustmer_table);


    $create_category_table = "CREATE TABLE IF NOT EXISTS `category` (
        category_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        category_name VARCHAR(30) 

    )";

    if(mysqli_query($conn , $create_category_table) ) {
        echo 'category table done' ;
    }

    // // INSERT DATA
    // $insert_category_table = " INSERT INTO  `category` ( category_name ) VALUES (
    // 'Friges')";
    // mysqli_query($conn , $insert_category_table);



    $create_product_table = "CREATE TABLE IF NOT EXISTS `product` (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        product_name VARCHAR(30) ,
        price INT ,
        product_desc TEXT,
        cat_id INT

    )";
    if(mysqli_query($conn , $create_product_table) ) {
        echo ' product table done ' ;
    }

    // // INSERT DATA
    // $insert_product_table = " INSERT INTO  `product` ( product_name , price , product_desc , cat_id ) VALUES (
    // 'toshiba' , 20000 , 'تلاجه جامده جدا' , 1 )";
    // mysqli_query($conn , $insert_product_table);


    $create_orders_table = "CREATE TABLE IF NOT EXISTS `orders` (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        product_id INT ,
        coustmer_id INT ,
        adress TEXT,
        date_of_order DATE

    )";
    if(mysqli_query($conn , $create_orders_table) ) {
        echo ' orders table done ' ;
    }

    // // INSERT DATA
    // $insert_orders_table = " INSERT INTO  `orders` ( adress , coustmer_id , product_id ) VALUES (
    // 'MANSOURA - AGA' , 1 , 1 )";-
    //  mysqli_query($conn , $insert_orders_table);


   

    $create_payments_table = "CREATE TABLE IF NOT EXISTS `payments` (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        order_id INT ,
        date_of_payment TEXT 
    )";
    if(mysqli_query($conn , $create_payments_table) ) {
        echo ' payments table done ' ;
    }

    // // INSERT DATA
    // $insert_payments_table = " INSERT INTO  `payments` ( order_id , date_of_payment ) VALUES (
    // 1 , '5/10-/2022')";
    // mysqli_query($conn , $insert_payments_table);
    

?>