<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body >
	
    <div style="align:center">
        <?php
            
            $conn=mysqli_connect("localhost","root","","gym");
            if($conn->connect_error)
            {
                die("conn failed".$conn->connect_error);
            }
            $sql="select * from register ";
            $result=$conn->query($sql);
            echo "<br>";
            echo "<div class='scrollit'>";
            echo "<table border='2' align='center'>";
            echo "<tr>";
            echo "<th>ID No.</th><th>Name</th><th>Fathername<th>age</th><th>gender</th><th>email</th></tr>";
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['Fathername']."</td>";
                    
                    echo "<td>".$row['age']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['email']."</td>";
                    
                    echo"</tr>";

                    

                    
                    
                    

                }
            }
            else
            {
                echo "table is empty";

            }
            echo "</table>";
        echo "</div>";


        ?>
    </div>
  </div>

</body>

</html>