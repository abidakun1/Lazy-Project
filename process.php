<?php
//include database connection
include('database.php');

if (isset($_POST['send'])) {

  //declare variables and protect it from html injection
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $password = sha1($_POST['password']); //convert password to sha1 string

  //insert into database.
  $insert = "INSERT INTO `users`(`user_id`, `username`, `password`) VALUES(NULL, '$username', '$password')";
  $run = mysqli_query($con, $insert) or die(mysqli_error($con));

  if ($run) {
    echo "
          <center>
            <h2 style='color:green; text-align:center; margin-top:30px;'>
              User Info Submitted Successfully
            </h2>

            <br/>

          <a href='index.html'>Refresh Page</a>
         </center>";
  }

}

 ?>
