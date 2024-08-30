<?php

    include "header.php";


?>

<table>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>

<?php

     $host    = "localhost";
     $user    = "root";
     $password="";
     $dbName  = "hospital";

     $conn= mysqli_connect($host,$user,$password,$dbName);

    // export the database
    $query  = "SELECT * FROM patients ";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>". $row['id']."</td>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['email']."</td>";
            echo "<td>". $row['date']."</td>";
            echo "</tr>";

        } echo"</table>";
    }else{
        echo "Error: ";
    }

?>
