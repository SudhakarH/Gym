<?php 
$conn=mysqli_connect('localhost','root','','gym');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['name'])){
    
    $name=$_POST['name'];
    $fname=$_POST['Fathername'];
    $age =$_POST['age'];
    $gender =$_POST['gender'];
    $mail=$_POST['email'];
    
  
    $sql="select * from register where name='".$name."' limit 1";
    
    $result=mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)==1){
                    echo '<script language="javascript">';
        			echo 'alert("same username already exists")';
        			echo '</script>';  
        			echo '<Script language="javascript">';
			        echo 'window.location = "login.html" ';
			        echo '</script>';
                    
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("registration sucessfull")';
        echo '</script>';
        $reg="insert into register(name,Fathername,age,gender,email) values('$name','$fname','$age','$gender','$mail')";
        mysqli_query($conn,$reg);
        echo '<Script language="javascript">';
        echo 'window.location = "regis.html" ';
        echo '</script>';
      
        exit();
    }
        
}
?>