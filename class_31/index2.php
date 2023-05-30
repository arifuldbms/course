
<?php 

$Host  = 'localhost';
$User  = 'root';
$Pass  = '';
$DB    = 'arif';

 $Connection = mysqli_connect($Host,$User,$Pass,$DB);

if(isset($_POST["submit"])) {
  $Name        = $_POST['name'];
  $Email       = $_POST['email'];
  $Password    = $_POST['password'];

   $Query = "INSERT INTO student(name, email, password, status) VALUES ('$Name','$Email','$Password',1)";

     $result =  mysqli_query($Connection,$Query);

       if (!$result){
        echo"wrong data";
       }
       else
       {
          echo"data successfull";
       }
  
    } 
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Register</title>
 </head>
 <body>
     <form>

       <form action="index.php" enctype="multipart/form-data" Method="POST">
        <label for="Name">Name</label>
        <input type="text" name="name">

        <label for="Email">Email</label>
        <input type="email" name="email">

        <label for="Password">Password</label>
        <input type="password" name="password">

        <input type="submit" name="submit" value="Register">  

    </form>
</body>
 </html>





