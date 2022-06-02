<?php 
//Include the Database connection file
include_once "includes/connect.php"; 
$sql = "SELECT * FROM contributors";


$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result) > 0)
{
   // echo "Data found";
    //mysqli_fetch_assoc
    //mysqli_fetch_array
    //Getting Data using an Associative Array
    ?>
    <div class="table-responsive">
  <table class="table">
    <thead>
        <th>
            user_id
        </th>
        <th>
            Firstname
        </th>
        <th>
            Lastname
        </th>
        <th>
            Phone Number
        </th>
        <th>
            Address
        </th>
        <th>
            Date of Payment
        </th>
        <th>
            Mode of Payment
        </th>
        <th>
            Mosque name
        </th>
    </thead>
  </table>
</div>

    
    <?php

//start while loop
while($row=mysqli_fetch_assoc($result))
{
    //display all rows and columns using a while loop 
    ?>
    <tr>
        <td><?php echo $row["user_id"];?></td>
        <td><?php echo $row["Firstname"];?></td>
        <td><?php echo $row["Lastname"];?></td>
        <td><?php echo $row["Phone_number"];?></td>
        <td><?php echo $row["Address"];?></td>
        <td><?php echo $row["dop"];?></td>
        <td><?php echo $row["mop"];?></td>
        <td><?php echo $row["Mosque_name"];?></td>
    </tr>
    <?php 
    //close while loop
}
//end the table
echo "</table>";
}
else
{
echo "Data Not Found";
}


?>