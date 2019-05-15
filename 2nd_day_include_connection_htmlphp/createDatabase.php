<?php 
include "connection.php";

$conn = connection();

$sql = "create table test(
                        id int(11), 
                        name varchar(255)
                        )";
                        
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

?>