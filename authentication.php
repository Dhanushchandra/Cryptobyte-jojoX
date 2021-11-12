<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        // $sql = "select *from login where username = '$username' and password = '$password'";  
        
        $sql = ("select *from login where username = '$username' and password = '$password'");  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           header("Location: html/bitcoin.html");
           exit();  
        }
        else{  
           $sql = ("INSERT INTO login (username, password) VALUES ('$username', '$password')") ;
            
            if (mysqli_query($con, $sql)) {
            
                 header("Location: html/bitcoin.html");
                exit(); 
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

        }
        
       
         
?>  