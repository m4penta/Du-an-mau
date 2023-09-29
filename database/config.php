<?php
    //start
    session_start();

    
    
    //non reapeating value
    define('SITEURL','http://localhost/php/Du-an-mau/'); // đường dẫn để hiển thị dự án lên cho trình duyệt
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'duanmau'); // khai bao database
    

    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die("Connection failed: " . $conn->connect_error); // database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die("Connection failed: " . $conn->connect_error);// lua chon database
    // $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD)  or die(mysqli_error());
    // $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());


?>