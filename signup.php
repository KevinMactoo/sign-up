
   <?php
   /*if "email" variable is filled out, send email   if (isset($_REQUEST['email']))  {
          Email information   $admin_email = "someone@example.com";
             $email = $_REQUEST['email'];   $subject = $_REQUEST['subject'];
               $comment = $_REQUEST['comment'];
                 send email   mail($admin_email, "$subject", $comment, "From:" . $email);
                    Email response   echo "Thank you for contacting us!";   }
                       if "email" variable is not filled out, display the form
                        else   {
                           ?>   <form method="post">*/

      Email: <input name="email" type="text" />
      Subject: <input name="subject" type="text" />
      Message:
      <textarea name="comment" rows="15" cols="40"></textarea>
      <input type="submit" value="Submit" />   </form>    <?php   } ?>


<!--DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<h2>Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>


   <?php require_once 'process.php'; 

  	$mysqli = new mysqli('localhost', 'root',"", 'login') or die(mysqli_error($mysqli));
  	$result = $mysqli->query("SELECT * FROM signup") or die($mysqli->error);

   ?>


  <?php //if "email" variable is filled out, send email   if (isset($_REQUEST['email']))  {      //Email information   $admin_email = "someone@example.com";   $email = $_REQUEST['email'];   $subject = $_REQUEST['subject'];   $comment = $_REQUEST['comment'];      //send email   mail($admin_email, "$subject", $comment, "From:" . $email);      //Email response   echo "Thank you for contacting us!";   }      //if "email" variable is not filled out, display the form   else  { ?>   <form method="post">
      Email: <input name="email" type="text" />
      Subject: <input name="subject" type="text" />
      Message:
      <textarea name="comment" rows="15" cols="40"></textarea>
      <input type="submit" value="Submit" />   </form>    <?php   } ?>

  <form class="modal-content" action="process.php" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to .</p>
      <hr>
      <label for="email"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="email"><b>Phone</b></label>
      <input type="text" placeholder="Enter Phone number" name="phone" required>

      <!--label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <!--label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label-->

      <!--p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p-->

      <!--div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="send">Submit</button>

      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
