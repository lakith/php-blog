<html>
    <hrad>
    </hrad>
</html>
<body>

    <div id="contentdiv">
        <table id=" tblstyle">
            <tr>
                <th><i class="glyphicon glyphicon-user"></i> Student ID</th>
                <th><i class="fa-calendar"></i>First name</th>
                <th><i class="fa-wordpress"></i>Last name</th>
                <th><i class="fa-wordpress"></i>Address</th>
                <th><i class="fa-wordpress"></i>City</th>
                <th></th>
            </tr>
    <?php
    $del_id=0;
    $host='localhost';
    
    $conn=mysqli_connect($host,'root','','PracticalDB');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT studentID, first_name  , last_name ,address,city FROM students";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            $del_id = $row["studentID"];
            echo "<tr><td>" . $row["studentID"]. "</td><td>" . $row["first_name"]. "</td><td>".$row["last_name"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td><a href='update_details.php?id=".$del_id."'>Edit </a></td>";
        }
    
    } else {
        echo "0 results";
    }
    
    $conn->close();

    ?>
  

    </table>
    </div>
    <button><a href = "delete_last_row.php?del_id="<?php echo $del_id?>>Delete last row</a></button>
    <button><a href = "insert_user.html">Add students</a></button>
</body>