<?php
// database variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myPRO_db";

// databse connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if(!$connection)
{
    die("failed database connection: ".mysqli_connect_error());
}

// Insert multiple into table
$insert = "INSERT INTO users (
    firstname, lastname, email
)
VALUES(
    'Ahmed', 'Oladejo', 'ahmedoladejo@gmail.com'
);";
$insert .= "INSERT INTO users(
    firstname, lastname, email
)
VALUES(
    'Simbiat', 'Oke', 'okesimbiat@gmail.com'
);";
$insert .= "INSERT INTO users(
    firstname, lastname, email
)
VALUES(
    'Segun', 'Quadri', 'segunquadri@gmail.com'
)";
if (mysqli_multi_query($connection, $insert))
{
    echo "Added new records to users";
}
else
{
    echo "Error: " . $insert . mysqli_error($connection);
}


// // ---------------INSERT AND GET LAST_ID CODE---------------------
// // insert data into table
// $create = "INSERT INTO users 
// (
//     firstname, lastname, email
// )
// VALUES
// (
//     'Qozeem', 'Odeniran', 'qozeemodeniran@gmail.com'
// )";
// if (mysqli_query($connection, $create))
// {
//     $lastId = mysqli_insert_id($connection);
//     echo "New records added to table.<br>
//     The last inserted id is: " . $lastId;
// }
// else
// {
//     echo "Error: " . $sql . "<br>" . mysqli_error($connection);
// }

// // ---------------------TABLE CODE-----------------------------
// // create table
// $create = "CREATE TABLE users
// (
//     id int(6) unsigned auto_increment primary key,
//     firstname varchar(30) not null,
//     lastname varchar(30) not null,
//     email varchar(50),
//     reg_date timestamp default current_timestamp on update current_timestamp
// )";
// if (mysqli_query($connection, $create))
// {
//     echo "Table created";
// }
// else
// {
//     echo "failed to create table: " . mysqli_error($connection);
// }


// // ----------------DATABASE CODE---------------------
// // create databse
// $create = "CREATE DATABASE myPRO_db";

// // check databse
// if(mysqli_query($connection, $create))
// {
//     echo "database created.";
// }
// else
// {
//     echo "failed to create databse: ".mysqli_error($connection);
// }

// close connection
mysqli_close($connection);
?>