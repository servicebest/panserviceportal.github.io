<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Righteous&display=swap" rel="stylesheet">
  <title>Join Retailer</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: 'Righteous', cursive;
font-family: 'Concert One', cursive;
      box-sizing: border-box;
    }
    body {
      background-color: #3498db;
      padding: 0 10px;
    }
    .maintop {
      max-width: 500px;
      width: 100%;
      background: #fff;
      margin: 20px auto;
      box-shadow: 2px 2px 2px #2c3e50;
      padding: 15px;

    }
    .maintop .title {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 25px;
      color: #3498db;
      text-transform: uppercase;
      text-align: center;
    }
    .maintop .form {
      width: 100%;
    }
    .maintop .form .input_field {
      margin-bottom: 15px;
    }
    .maintop .form .input_field label {
      width: 200px;
      color: #2c3e50;
      margin-bottom: 5px;
      margin-right: 10px;
      font-size: 14px;

    }
    .maintop .form .input_field .input {
      width: 100%;
      outline: none;
      border: 1px solid #7f8c8d;
      padding: 5px 8px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    .maintop .form .input_field .input:focus {
      border :1px solid #fec107;
    }
    .maintop .form .input_field .input p {
      font-size: 14px;
      color: #7f8c8d;
    }
    .maintop .form .input_field .input .check {
      width: 15px;
      height: 15px;
      position: relative;
      display: block;
      cursor: pointer;
    }
    .btn_submit {
      padding: 10px 15px;
      margin: 20px auto;
      width: 100%;
      font-size: 15px;
      background-color: white;
      color: black;
      border: 2px solid #3498db;
      border-radius: 5px;
      align-items: center;
    }
    .btn_submit:hover {
      background-color: #3498db;
      color: white;
      border-color: white;
    }
  </style>
</head>
<body>
  <div class="maintop">
    <div class="title">
      Retailer Registration Form
    </div>
    <div class="form">
      <form method="POST">
      <div class="input_field">
        <label>Name</label>
        <input type="text" name="name" class="input" placeholder="Enter Name" required>
      </div>
      <div class="input_field">
        <label>User ID</label>
        <input type="text" name="userid" class="input" placeholder="Enter User ID" required>
      </div>
      <div class="input_field">
        <label>Password </label>
        <input type="Password" name="password" class="input" placeholder="Enter Password" required>
      </div>
      <div class="input_field">
        <label>Email </label>
        <input type="email" name="email" class="input" placeholder="Enter Email ID" required>
      </div>
      <div class="input_field">
        <label>Contact No</label>
        <input type="text" name="mobile" class="input" maxlength="10" placeholder="Enter Contact No." required>
      </div>
      <div class="input_field">
        <label>City</label>
        <input type="text" name="city" class="input" placeholder="Enter City" required>
      </div>
      <div class="input_field">
        <label>Pan Card No.</label>
        <input type="text" name="pan" class="input" placeholder="Enter Pan No." required>
      </div>
      <div class="input_field">
        <label>State</label>
        <input type="text" name="state" class="input" placeholder="Enter State" required>
      </div>
      <div class="input_field">
        <label>Pincode </label>
        <input type="number" name="Pin" class="input" placeholder="Enter Pincode" required>
      </div>
      <div class="input_field">
        <label> ID Price </label>
        <input type="number" name="price" class="input" placeholder="Rs.99" readonly>
      </div>
      <div class="input_field">
        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" class="check">Remember me
        </label>
      <div class="input_field">
        <label><p>By creating an account you agree to our <a href="#" style="color: dodgerblue;">Terms & Privacy.</a></p> </label>
      </div>
      <div class="input_field">
        <input type="submit" name="submit" value="Registration Now" class="btn_submit">
      </div>
      </div>
    </form>
    </div>
  </div>

</body>
</html>
<?php 

 include 'Connection.php';

 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $pan = $_POST['pan'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];

    $queryr = " insert into rinfo(Name,Userid,Password,Email,Contactno,City,Panno,State,Pin) values('$name','$userid','$password','$email','$mobile','$city','$pan','$state','$pin')";

    $res = mysqli_query($con,$queryr);

      if ($res) {
        ?>
          <script>
            alert('Registration Successful');
          </script>
          <?php
        }else{
          ?>
          <script>
            alert('Sorry, Registration is Not Success');
          </script>
          <?php
        }
      }
 ?>