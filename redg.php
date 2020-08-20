<?php 
$conn=mysqli_connect('localhost','root','','gym');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['username'])){
    
    $name=$_POST['username'];
    $pass=$_POST['password'];
    
  
    $sql="select * from usertable where username='".$name."' limit 1";
    
    $result=mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)==1){
                    echo '<script language="javascript">';
        			echo 'alert("same username already exists")';
        			echo '</script>';  
        			echo '<Script language="javascript">';
			        echo 'window.location = "regis.html" ';
			        echo '</script>';
                    
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("registration sucessfull")';
        echo '</script>';
        $reg="insert into usertable(username,password) values('$name','$pass')";
        mysqli_query($conn,$reg);
        echo '<Script language="javascript">';
        echo 'window.location = "login.html" ';
        echo '</script>';
      
        exit();
    }
        
}
?>