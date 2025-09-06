<?php

    
        
    include("connect.php");

                   
                    $errors = array();  
  
/*************************REGISTRATION*********************/


if(isset($_POST['signup'])){
        $username = mysqli_real_escape_string($con,$_POST['uName']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['pass']);
        $cpassword = mysqli_real_escape_string($con,$_POST['cpass']);
        
        //ensure that all form fields are filled
         
        $Check=mysqli_query($con,"select *from registration where user_name='$username' ");
        if(empty($username)) {
            array_push($errors,"Username is required");
        } 
        elseif(! preg_match("/^[a-zA-Z0-9_]{5,25}+$/", $username)){
            
        array_push($errors,"Username must contain at least 5 charactor using a-z and 0 to 9");  
        }
        elseif($row=mysqli_fetch_row($Check)>0){
            
            array_push($errors,"username already exist");
            
        }
        
        elseif(empty($email)) {
            array_push($errors,"Email is required");
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            array_push($errors,"Email must be in formate");
            
        }
        elseif(empty($password)) {
            array_push($errors,"Password is required");
        }
        elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
            
                        array_push($errors," password Must contain at least 1 number and 1 letter and Must be 8-12 characters");
        }
        elseif($password != $cpassword) {
            array_push($errors,"Password Mismatch");
        }
        
        //If there are no errors save them to database
        if(count($errors) == 0){
            $password_hash = md5($password); //Encrypt Password before storing in database
            $query = "INSERT into registration (user_name,user_email,user_pass) VALUES ('$username','$email','$password_hash')";
            mysqli_query($con,$query)or die("Could not connect");
          
           
            header("location:Login.php");
        }   
    }

    /********************LOGIN PAGE****************************/

    if(isset($_POST['signin'])){
         
           $username = mysqli_real_escape_string($con,$_POST['uName']);
           $password = mysqli_real_escape_string($con,$_POST['pass']);
           $Time=time("HH:MM:SS");
            $date=date("y-m-d");
          if(empty($username)) {
            array_push($errors,"Username is required");
          } 
         if(empty($password)) {
            array_push($errors,"Password is required");
         }
         if(count($errors) == 0){  
         $password_hash=md5($password);
          
         $query="select * from registration where user_name='$username' and user_pass='$password_hash' ";
         $result=mysqli_query($con,$query);
         $row = mysqli_fetch_row($result);
          
        if($row[1]=="$username" && $row[4]=="$password_hash") 
        {
             
            $query2="INSERT into user_log(user_id,date,time) VALUES('$row[0]','$date','$Time')";
            mysqli_query($con,$query2)or die("Could not connect");
            
             $_SESSION['username'] = $username;
             $_SESSION['id'] = $row[0];
          
            header("location:index.php");
        }
        else{
             
              array_push($errors,"Username or password does't match to any account");
               
         }
         
     }
    }

       /********************CONTACT PAGE****************************/  
     
         
        if(isset($_POST['cont'])){
       $cusername = mysqli_real_escape_string($con,$_POST['cname']);
        $cemail = mysqli_real_escape_string($con,$_POST['cmail']);
        $cphone= mysqli_real_escape_string($con,$_POST['cphone']);
        $cmsg = mysqli_real_escape_string($con,$_POST['msg']);
        
        
        //ensure that all form fields are filled
        if(empty($cusername)) {
            array_push($errors,"Username is required");
        } 
        elseif(! preg_match("/^[a-zA-Z0-9_]{5,25}+$/", $cusername)){
            
        array_push($errors,"Username must contain at least 5 charactor using a-z and 0 to 9");  
        }
    
        
        if(empty($cemail)) {
            array_push($errors,"Email is required");
        }
        elseif(!filter_var($cemail, FILTER_VALIDATE_EMAIL)){
            
            array_push($errors,"Email must be in formate");
            
        }
            
        if(empty($cphone)) {
            array_push($errors,"PhoneNumber is required");
        }
        elseif(!preg_match("/^[0-9]{10}$/", $cphone)){
            
            array_push($errors,"PhoneNumber contain 10 digits");
            
        }  
            
    
         if(empty($cmsg)) {
            array_push($errors,"Messege is required");
        } 
        elseif(! preg_match("/^[a-zA-Z0-9 \S]{30,200}+$/", $cmsg)){
            
        array_push($errors,"Messege must contain at least 30 charactor");  
        }
       
        
        //If there are no errors save them to database
        if(count($errors) == 0){
          
            $query = "INSERT into contact (con_name,con_mail,con_mobile,con_msg) VALUES ('$cusername','$cemail','$cphone','$cmsg')";
            mysqli_query($con,$query) or die("Could not connect");
           
            
            header("location:index.php");
        }   
    } 

?>