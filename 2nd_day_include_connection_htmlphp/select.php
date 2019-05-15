<?php 	

    include "connection.php";


    $conn = connection();

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

?>


    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">USERNAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">PASSWORD</th>
        </tr>
    </thead>
    <tbody>

    <?php 
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) { 
    
    ?>
        <tr>
        <th scope="row"><?php echo $row['id'];	 ?></th>
        <td><?php echo $row['username'];	 ?></td>
        <td><?php echo $row['email'];	 ?></td>
        <td><?php echo $row['password'];	 ?></td>
        </tr>
    
    <?php 	
    }
    ?>
    
    </tbody>
    </table>



<?php 	
    } else {
        echo "Table is empty";
    }
    $conn->close();
?>