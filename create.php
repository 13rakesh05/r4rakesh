<?php

include "connection.php";

if (isset($_POST['submit'])) {

  $name    = $_POST['name'];
  $fname   = $_POST['fname'];
  $email   = $_POST['email'];
  $mobile  = $_POST['mobile'];
  $gender  = $_POST['gender'];
  $dob     = $_POST['dob'];
  $city    = $_POST['city'];
  $country = $_POST['country'];

  $sql = "INSERT INTO `emprecord`( `name`, `father name`, `email`, `mobile`, `gender`, `dob`, `city`, `country`) VALUES ('$name',  '$fname', '$email', '$mobile', '$gender', '$dob', '$city', '$country')";

      $result = mysqli_query($conn, $sql);

 }
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="validation.js"></script>
  <title>New Employee</title>

</head>

<body>

  <div class="container bg-light p-5">

    <div class="card-header bg-success text-center text-white">
      <h3>Registration</h3>
    </div>

    <form onsubmit="return validation()" method="POST" autocomplete="off">
    <!-- All input fields of Form -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name"> Name :</label>
            <input type="text" name="name" id="name" class="form-control ml-2">
            <span id="nErr" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="fname"> Father Name :</label>
            <input type="text" name="fname" id="fname" class="form-control ml-2">
            <span id="fnErr" class="text-danger font-weight-bold"></span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="email"> Email :</label>
            <input type="text" name="email" id="email" class="form-control ml-2">
            <span id="emErr" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="contact"> Mobile No. :</label>
            <input type="text" name="mobile" id="mobile" class="form-control ml-2">
            <span id="mobErr" class="text-danger font-weight-bold"></span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gender"> Gender :</label><br>
              <select class="select form-control" name="gender" id="gender">
              <option class="selected-option">Select</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            <span id="gErr" class=" text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="dob"> Date Of Birth :</label>
            <input type="date" name="dob" id="dob" class="form-control ml-2">
            <span id="dobErr" class="text-danger font-weight-bold"></span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="city"> City :</label>
            <input type="text" name="city" id="city" class="form-control ml-2">
            <span id="ctErr" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="country"> Country :</label>
            <input type="text" name="country" id="country" class="form-control ml-2">
            <span id="ctrErr" class="text-danger font-weight-bold"></span>
          </div>
        </div>
      </div>
<!-- buttons -->
      <div class="row">
        <div class="col-md-6">
          <div calss="form-group">
            <button type="submit" name="submit" value="submit" class="btn btn-success pl-5 pr-5" style="margin-left:180px;"> Save </button>
          </div>
        </div>
        <div class="col-md-6">
          <div calss="form-group">
              <a href="display.php" role="button" class=" btn btn-primary pl-3 pr-3 text-white" style="margin-left:150px;"> View Records </a>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>