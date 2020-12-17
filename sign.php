<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "mydb";
   $flag = false;
   $conn = new mysqli($servername,$username,$password,$dbname);
   if($conn->connect_error) 
   	die("Error in connecting to the database: ".$conn->connect_error);
   $sql = "SELECT sr_no, name, email, pwd FROM account";
   $stmt = $conn->prepare("INSERT INTO account(name,email,pwd) VALUES(?,?,?)");
   $stmt->bind_param("sss",$name,$email,$pwd);
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pwd = $_POST['pwd'];
   $result = $conn->query($sql);
   if($result->num_rows > 1){
   	    while($row=$result->fetch_assoc()){
   	 	    if($row['email']===$email && $row['name']===$name && $row['pwd']===$pwd){
   	 	       echo "You have already an account with us. Please go back and login<br>";
   	 	       $flag = true;
   	 	       break;
   	 	    }
   	 	    else if($row['email']===$email){
   	 	    	echo "This email id is already registered.Please go back and use a different id<br>";
   	 	    	$flag = true;
   	 	    	break;
   	 	    }
   	    }
   }
   if(!$flag){
   	  $stmt->execute();
      echo "Your account has created successfully.<br>";
   }
?>