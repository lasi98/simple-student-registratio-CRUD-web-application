<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loggin page</title>
    <link rel="stylesheet" href="index.css" />
    <script src="index.js"></script>
  </head>
  <body>
    <form id="lgdiv" action="./backend/addsdt.php" method="post"  autocomplete="off">
      <fieldset>
        <!-- Legend tag using -->
        <legend style="text-align: center; font-size: 40px" id="legend">
          STUDENT REGISTRATION
        </legend>
        <br /><br /><br />
        <label style="margin-left: 40px" id="ff">First Name:</label>
        <input type="text" id="fname" name="first_name"  required/>

        <label style="margin-left: 10px">Last Name:</label>
        <input
          type="text"
          id="lname"
          style="margin-left: 12px"
          name="last_name"
          required
        />

        <br /><br /><br />
        <label style="margin-left: 40px">Gender :</label>
        <select name="gender" id="gen" style="margin-left: 20px">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>

        <label style="margin-left: 10px">Date of birth:</label>
        <input type="date" id="date" name="dob" required/>
        <br /><br /><br />

        <label style="margin-left: 40px">Email:</label>
        <input type="email" id="email" style="margin-left: 33px" name="email" required />
        <label style="margin-left: 10px">Address:</label>
        <input
          type="text"
          id="address"
          style="margin-left: 30px"
          name="address"
          required
        /><br /><br />

        <br /><label style="margin-left: 40px">Mobile:</label>
        <input type="tel" id="tel" style="margin-left: 25px" name="mobile" placeholder="xxx-xxx-xxxx" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" required />
        <label style="margin-left: 10px">Guardian:</label>
        <input
          type="text"
          id="Ownername"
          style="margin-left: 23px"
          name="guardian"
          required
        /><br /><br /><br />
        <hr />
        <br />
        <label style="margin-left: 43px">Type a Password:</label>
        <input type="password" id="pw" name="password"  required/>
        <br /><br />
        <input type="reset" value="Reset" id="reset"  />
        <button type="submit" value="Registar" id="sub">Registar</button>
      </fieldset>
    </form>
    <button id="veiw" onclick="navi()">VIEW REGISTED STUDENT LIST</button>

    <script>
      function navi() {
        location.replace("studentlist.php");
      }

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

      var btove = document.getElementById("veiw");

      btove.addEventListener("mousemove", typeOfEvent3);
      btove.addEventListener("mouseout", typeOfEvent4);
      function typeOfEvent3() {
        veiw.textContent = "Click Here to View Registed student";
      }
      function typeOfEvent4() {
        veiw.textContent = "VIEW REGISTED STUDENT LIST";
      }
    </script>
  </body>
</html>
