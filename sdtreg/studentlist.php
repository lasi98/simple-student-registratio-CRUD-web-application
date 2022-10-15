<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student List</title>
    <link rel="stylesheet" href="list.css" />
  </head>
  <body>


    <table id="tableEMP">
      <?php

require_once "./backend/connection.php";



$sql = "SELECT id, first_name, last_name, gender,dob, email, address, mobile, guardian, password FROM student";
$result = $conn->query($sql);

echo "<thead>
<tr>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Email</th>
<th>Address</th>
<th>Mobile</th>
<th>Guardian</th>
<th>Password</th>
<th>Action</th>

</tr>
</thead>";


if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
// echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["gender"]. "<br>";
echo "<tbody>
<tr>
<td>{$row['id']}</td>
<td>{$row['first_name']}</td>
<td>{$row['last_name']}</td>
<td>{$row['gender']}</td>
<td>{$row['dob']}</td>
<td>{$row['email']}</td>
<td>{$row['address']}</td>
<td>{$row['mobile']}</td>
<td>{$row['guardian']}</td>
<td>{$row['password']}</td>
<td><a href='http://localhost/sdtreg/sdtupdate.php?id={$row['id']} & first_name={$row['first_name']} & last_name={$row['last_name']} & gender={$row['gender']} & dob={$row['dob']} & email={$row['email']} & address={$row['address']} & mobile={$row['mobile']} & guardian={$row['guardian']} & password={$row['password']}'><button >Update</button></a>
<a href='http://localhost/sdtreg/backend/sdtdelete.php?id={$row['id']}'><button >Delete</button></a></td>
</tr>
</tbody>";
}
} else {
echo "0 results";
}



// if ( isset($_POST) ) {

//     header("Location: http://localhost/coffe/EMP.html");
//     exit;

// }


$conn->close();
?>
        
        
      </table>

  </body>
</html>
