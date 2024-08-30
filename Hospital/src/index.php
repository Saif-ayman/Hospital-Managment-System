<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For life Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css" >
</head>
<body>
  <div class="main">
     <div class="logo">
        <img src="images/logo.png" alt="Abo Hany Hospital Logo">
        <h2> For Life Hospital</h2>
      </div>
    <div class="book" >
    <p>Welcome to For Life Hospital For Reservation fill information
    </p>
    <form action="index.php" method='POST'>
        <input type="text" placeholder="Name" name="name"/>
        <input type="email" placeholder="Email" name="email"/>
        <input type="date" name="date"/>
        <input type="submit" value ="Check" name="send"/>
      </form>

      <?php
      // Connect to database
      $host    = "localhost";
      $user    = "root";
      $dbName  = "hospital";
 
      $conn= mysqli_connect($host,$user,"",$dbName);
     
      
       //insert information into database
        if(isset($_POST['send'])) {
          $name     = $_POST['name'];
          $email    = $_POST['email'];
          $date     = $_POST['date'];
          $query = "INSERT INTO patients(name,email,date) VALUE('$name','$email','$date')";
          $result = mysqli_query($conn,$query);
          echo"<p style='color:green'>"."Success"."</p>";
        }else{
          echo "<p style='color:red'>"."Failed"."</p>";
        }
        


      ?>

    </div>
  </div>
</body>
</html>