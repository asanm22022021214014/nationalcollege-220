<?php include("connection.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>collage</title>
</head>

<body>
      <div class="container">
          <form action="#" method="POST">
        <div class="title">
            Registration form
        </div>
        <div class="form">
           <div class="input_file">
                 <lable>First Name</lable>
                 <input type="text" class="input"  name="fname" required>
            </div>

            <div class="input_file">
                 <lable>Last Name</lable>
                 <input type="text" class="input"  name="lname" required>
            </div>
            
            <div class="input_file">
                 <lable>Password</lable>
                 <input type="password" class="input"  name="password" required></input>
            </div>
           
            <div class="input_file">
                 <lable>Confirom Password</lable>
                 <input type="password" class="input"  name="conpassword" required>
            </div>

            <div class="input_file">
                 <lable>Gender</lable>
                 <div class="custom_select">
                 <select name="gender" required>
                    <option value="Not selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                 </select>
                 </div>
            </div>

            <div class="input_file">
                 <lable>Email</lable>
                 <input type="text" class="input"  name="email" required>
            </div>

            <div class="input_file">
                 <lable>Phone Number</lable>
                 <input type="text" class="input" name="phone" required>
            </div>
             
            <div class="input_file">
                 <lable>Address</lable>
                <textarea class="textarea" name="address" required></textarea>
            </div>
                    
            <div class="input_file trems">
                 <lable class="check">
                    <input type="checkbox" required></input>
                    <span class="checkmark"></span>
                 </lable>
                <p>Agree to trems and conditions</p>
            </div>
            <div class="input_file">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>   
      </div>
</form>
</body>

</html>

<?php 
   if($_POST['register'])
   {
     $fname     = $_POST['fname'];
     $lname     = $_POST['lname'];
     $pwd       = $_POST['password'];
     $cpwd      = $_POST['conpassword'];
     $gender    = $_POST['gender'];
     $email     = $_POST['email'];
     $phone     = $_POST['phone'];
     $address   = $_POST['address'];

     $query = "INSERT INTO kanna (fname,lname,password,conpassword,gender,email,phone,address) VALUES('$fname','$lname','$pwd','$cpwd',
     '$gender','$email','$phone','$address')";
     $data = mysqli_query($conn,$query);
      
     if($data)
     {
        echo "Data Inserted Into Database";

     }
     else
     {
       echo "failed";
     }
  }
?>