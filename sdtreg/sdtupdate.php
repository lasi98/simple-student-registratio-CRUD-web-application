<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loggin page</title>
    <link rel="stylesheet" href="index.css" />
    <script src=""></script>
  </head>
  <body>
    <?php
    require_once "./backend/connection.php";
    $id = $_GET['id'];
    $fn = $_GET['first_name'];
    $ln = $_GET['last_name'];
    $gender = $_GET['gender'];
    $dob = $_GET['dob'];
    $eml = $_GET['email'];
    $add = $_GET['address'];
    $mobi = $_GET['mobile'];
    $guar = $_GET['guardian'];
    $pw = $_GET['password'];



?>
    <form id="lgdiv" action="" method="get"  autocomplete="off">
      <fieldset>
        <!-- Legend tag using -->
        <legend style="text-align: center; font-size: 40px" id="legend">
          UPDATE STUDENT DETAILS
        </legend>
        <label style="margin-left: 40px" id="ff">Student ID:</label>
        <input type="text" id="sdtid" name="id"required  value="<?php echo $id ?>"/>
        <br /><br /><br />
        <label style="margin-left: 40px" id="ff">First Name:</label>
        <input type="text" id="fname" name="first_name"  required value="<?php echo $fn ?>"/>

        <label style="margin-left: 10px">Last Name:</label>
        <input
          type="text"
          id="lname"
          style="margin-left: 12px"
          name="last_name"
          
          required
          value="<?php echo $ln ?>"
        />

        <br /><br /><br />
        <label style="margin-left: 40px">Gender :</label>
        <input type="text" name="gender" id="gen" style="margin-left: 20px" value="<?php echo $gender ?>">
         

        <label style="margin-left: 10px">Date of birth:</label>
        <input type="text" id="date" name="dob" required  value="<?php echo $dob ?>"/>
        <br /><br /><br />

        <label style="margin-left: 40px">Email:</label>
        <input type="email" id="email" style="margin-left: 33px" name="email" required value="<?php echo $eml ?>"/>
        <label style="margin-left: 10px">Address:</label>
        <input
          type="text"
          id="address"
          style="margin-left: 30px"
          name="address"
          required
          value="<?php echo $add ?>"
        /><br /><br />

        <br /><label style="margin-left: 40px">Mobile:</label>
        <input type="tel" id="tel" style="margin-left: 25px" name="mobile" placeholder="xxx-xxx-xxxx"
         pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" required value="<?php echo $mobi ?>" />
        <label style="margin-left: 10px">Guardian:</label>
        <input
          type="text"
          id="Ownername"
          style="margin-left: 23px"
          name="guardian"
          required
          value="<?php echo $guar ?>"
        /><br /><br /><br />
        
        
        <label style="margin-left: 43px">Type a Password:</label>
        <input type="text" id="pw" name="password"  required value="<?php echo $pw ?>"/>
        <br /><br />
       
        <input type="submit" value="UPDATE" id="sub" name="submit"/>
      </fieldset>
      <?php 
    


    if($_GET['submit'])
    {
        $id = $_GET ['id'];
        $first_name = $_GET ['first_name'];
        $last_name = $_GET ['last_name'];
        $gender = $_GET ['gender'];
        $dob = $_GET ['dob'];
        $email = $_GET ['email'];
        $address = $_GET ['address'];
        $guardian = $_GET ['guardian'];
        $mobile = $_GET ['mobile'];
        $password = $_GET ['password'];
        
        $query = "UPDATE STUDENT  SET id='$id' first_name='$first_name',last_name='$last_name',
        gender='$gender',dob='$dob',email='$email',address='$address',guardian='$guardian',mobile='$mobile',
        password='$password' WHERE id='$id' ";
        $data = mysqli_query($conn,$query);
        
        if($data){
            echo "<script>alert('Student Details Updated')</script>";
        }
         else
          {
            echo "<script>alert('Student Details Update faill')</script>";
        }
    }
    
    ?>
    

    </form>

    

    <script>
      

      var box = document.getElementById("lgdiv");
      box.addEventListener("mousemove", typeOfEvent1);
      box.addEventListener("mouseout", typeOfEvent2);
      
      function typeOfEvent1() {
        document.getElementById("legend").style.backgroundColor = "silver";
        document.getElementById("lgdiv").style.backgroundColor = "#58D68D";
      }
      function typeOfEvent2() {
        document.getElementById("legend").style.backgroundColor = "#E9967A";
        document.getElementById("lgdiv").style.backgroundColor = "#E9967A";
      }
      
      

      
    </script>
  </body>
</html>
