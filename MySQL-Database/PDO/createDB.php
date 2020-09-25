<?php
// database variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myPDO_db";

try
{
    // databse connection
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set pdo error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // insert data into table
    $create = "INSERT INTO users 
    (
        firstname, lastname, email
    )
    VALUES
    (
        'Qozeem', 'Odeniran', 'qozeemodeniran@gmail.com'
    )";
    $connection->exec($create);
    echo "New record added to table";

    // // ----------------------TABLE CODE---------------------------
    // // create table
    // $create = "CREATE TABLE users
    // (
    //     id int(6) unsigned auto_increment primary key,
    //     firstname varchar(30) not null,
    //     lastname varchar(30) not null,
    //     email varchar(50),
    //     reg_date timestamp default current_timestamp on update current_timestamp
    // )";
    // $connection->exec($create);
    // echo "Table successfully created";

    // ------------------------DATABASE CODE------------------------
    // // create database
    // $create = "CREATE DATABASE myPDO_db";

    // // use exec() 'cos no results are returned
    // $connection->exec($create);
    // echo "database created<br>";
}
catch(PDOException $e)
{
    echo $create . "<br>" > $e->getMessage();

    // echo $create . "<br>" . $e->getMessage();--------TBALE CODE

    // echo $create . "<br>" . $e->getMessage();------DATABASE CODE
}

// close connection
$connection = null;
?>