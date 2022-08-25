<?php  
include 'connection.php';

$id = $_GET['updateid'];

$sql = "SELECT * FROM `emprecord` WHERE `id`= '$id' ";

$query = mysqli_query($conn, $sql);

$res = mysqli_fetch_assoc($query);

if ( isset($_POST['update']) ) {
     
    $name    = $_POST['name'];
    $fname   = $_POST['fname'];
    $email   = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender  = $_POST['gender'];
    $dob     = $_POST['dob'];
    $city    = $_POST['city'];
    $country = $_POST['country'];

    echo $gender;
   
    $sql = "UPDATE `emprecord` SET `name`='$name',`father name`='$fname',`email`='$email',`mobile`='$mobile',`gender`='$gender',`dob`='$dob',`city`='$city',`country`='$country' WHERE `id` = '$id' ";

    $query = mysqli_query($conn, $sql);

    if($query) {
        header('location: display.php');    
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="validate.js"></script>
    <title>Update</title>

    
    </head>
    <body>
       
        <div class="container bg-light p-5">
            
                <div class="card-header bg-warning  text-center text-white">
                    <h3>Update details</h3>               
                </div>
            
        <form onsubmit="validateForm()" method="POST">
                    <div class="row">
                       <div class="col-md-6">
                         <div class="form-group">
                            <label for="name"> Name :</label>
                              <input type="text" name="name" class="form-control" value="<?php echo $res['name']; ?>">
                              <span id="nErr" class="text-danger"></span>
                                </div>
                                  </div>

                                    <div class="col-md-6">
                                  <div class="form-group">
                                <label for="ftname"> Father Name :</label>
                              <input type="text" name="fname" class="form-control" value="<?php echo $res['father name']; ?>">
                            <span id="fnErr" class="text-danger"></span>
                          </div>
                        </div>      
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                           <label for="email"> Email :</label>
                             <input type="email" name="email" class="form-control ml-2" value="<?php echo $res['email']; ?>">
                                <span id="emErr" class="text-danger"></span>
                                  </div>
                                   </div>

                                    <div class="col-md-6">
                                  <div class="form-group">
                                <label for="mobile"> mobile :</label>
                              <input type="text" name="mobile" class="form-control ml-2" value="<?php echo $res['mobile']; ?>">
                            <span id="cErr" class="text-danger"></span>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender"> Gender :</label><br>
                               <select class="select form-control" name="gender" >
                                   <option value="<?php echo $res['gender']; ?>">Select</option>
                                     <option>Male</option>
                                       <option>Female</option>
                                         </select>
                                           <span id="gErr" class="text-danger"></span>
                                           </div>
                                          </div>

                                       <div class="col-md-6">
                                   <div class="form-group">
                                <label for="dob"> Date Of Birth :</label>
                             <input type="date" name="dob" class="form-control ml-2" value="<?php echo $res['dob']; ?>">
                           <span id="dobErr" class="text-danger"></span>
                        </div>
                    </div>
                </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="city"> City :</label>
                              <input type="text" name="city" class="form-control ml-2" value="<?php echo $res['city']; ?>">
                                <span id="ctErr" class="text-danger"></span>
                                  </div>
                                   </div>

                                    <div class="col-md-6">
                                  <div class="form-group">
                                <label for="country"> Country :</label>
                              <input type="text" name="country" class="form-control ml-2" value="<?php echo $res['country']; ?>">
                            <span id="ctrErr" class="text-danger"></span>
                          </div>
                        </div>
                    </div>
                        
                     <div class="form-group">
                       <button type="submit" name="update" class="btn btn-warning pl-5 pr-5 text-white" style="margin-left: 170px;">Update</button>
                    <a href="display.php" role="button" class="btn btn-primary pl-5 pr-5 text-white float-right" style="margin-right: 150px;"> Back </a>
                </div>
              </div>
            </form>
         </div>
    </body>
</html>

