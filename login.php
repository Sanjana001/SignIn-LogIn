<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "mydb";
   $flag = false;
   $flag1 = false;
   $conn = new mysqli($servername,$username,$password,$dbname);
   if($conn->connect_error) 
   	die("Error in connecting to the database: ".$conn->connect_error);
   $sql = "SELECT sr_no, name, email, pwd FROM account";
   /*$stmt = $conn->prepare("INSERT INTO account(name,email,pwd) VALUES(?,?,?)");
   $stmt->bind_param("sss",$name,$email,$pwd);*/
   //$name = $_POST['name'];
   $email = $_POST['email'];
   $pwd = $_POST['pwd'];
   /*$email = "sanj@gmail.com";
   $pwd = "so";*/
   $name = "";
   $result = $conn->query($sql);
   if($result->num_rows > 1){
   	    while($row=$result->fetch_assoc()){
   	 	    if($row['email']===$email && $row['pwd']===$pwd){
   	 	       $name .= $row['name'];
   	 	       $flag = true;
   	 	       break;
   	 	    }
   	 	    else if($row['email']===$email && $row['pwd']!=$pwd){
   	 	    	$flag1 = true;
   	 	    	break;
   	 	    }
   	    }
   }
   if($flag){
   	  echo "Hi ".$name."! Welcome to this webpage.<br>";
   }
   else if($flag1){
   	  echo "Incorrect Password. Please go back and fill the correct login form.";
   }
   else{
   	  echo "You don't have any account with us. Please go back and create your account.<br>";
   }
?>