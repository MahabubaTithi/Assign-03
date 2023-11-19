<?php
@include 'connect.php';
if(isset($_POST['submit']))
 {
    $name=mysqli_real_escape_string($conn,$_POST['fName']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $message=mysqli_real_escape_string($conn,$_POST['userMessage']);


    $insert="INSERT INTO contact(name,email,phone,text) VALUES('$name','$email','$phone','$message')";
    $form= mysqli_query($conn,$insert);
 

    echo
    "
    <script>alert('Data Inserted successfully');</script>
    ";
 }
 else{
  echo
  "
  <script>alert('Error');</script>
  ";
 }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>

   
    <div class="hero">
<!-- <form action="connect.php" method="post"> -->

<form  method="POST">

    <div class="row">
        <div class="input-group">

            <input type="text" id="name" name="fName" required/>
            <label for="name"><i class="fas fa-user"></i> Your Name</label>
    
        </div>
    
        <div class="input-group">
    
            <input type="text" id="text" name="phone" required>
            <label for="number"><i class="fas fa-phone-square-alt"></i> Phone No.</label>
    
        </div>
    </div>
    

    <div class="input-group">

        <input type="email" id="email" name="email" required>
        <label for="email"><i class="fas fa-envelope"></i> Email ID</label>

    </div>

    <div class="input-group">

        <textarea  id="message"  rows="8"  name="userMessage" required></textarea>
        <label for="message"><i class="fas fa-comments"></i> Your Message</label>

    </div>

    <button type="submit" name="submit"> SUBMIT <i class="fas fa-paper-plane"></i></button>


</form>

    </div>

    


 
</body>
</html>