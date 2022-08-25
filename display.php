<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Student's Record</title>
  <script>
    $(document).ready(function(){
      $("#searchIp").on("keyup", function() {
        let value = $(this).val().toLowerCase();
          $("#mytable tr").filter(function() {
           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
      });
    });
    
  </script>
       
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="display.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

                 <!--table heading-->
                <div class="card-header bg-secondary my-2" style="width:80%; margin-left: 120px; border-radius: 48%;">
                    <em><h2 class="text-white text-center">Employee's Records</h2></em>
                </div>
               
                          <!--Filter table data-->
      <div class="row">             
          <div class="col-lg-6">
             <div class="form-group">
                <input type="text"  class="form-control my-2 ml-3" id="searchIp"  placeholder="Search..">
                   </div>
                     </div>
                     <!-- create new user -->
                     <div class="col-lg-6">
                        <a href="create.php" role="button" class=" btn btn-success float-right text-white my-3">Create User</a>
                    </div>
                </div>

        <table class="table table-hover table-bordered" style="cursor:pointer;">
            <thead>
                <!-- table heading -->
            <tr class="bg-secondary text-center text-white">
                <th>Sr.</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>City</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="mytable" class="text-center">

        <!-- getting table date from database -->
        <?php
            include 'connection.php';
            
            $sql = "SELECT * FROM `emprecord` ";

            $query = mysqli_query($conn, $sql);
        
            while ( $res = mysqli_fetch_assoc($query)) {
        ?>
                <tr>
                    <td> <?php echo $res['id']; ?> </td>
                    <td> <?php echo $res['name']; ?> </td>
                    <td> <?php echo $res['father name']; ?> </td>
                    <td> <?php echo $res['email']; ?> </td>
                    <td> <?php echo $res['mobile']; ?> </td>
                    <td> <?php echo $res['gender']; ?> </td>
                    <td> <?php echo $res['dob']; ?> </td>
                    <td> <?php echo $res['city']; ?> </td>
                    <td> <?php echo $res['country']; ?> </td>

                    <td> <a href="update.php?updateid=<?php echo $res['id']; ?>" class="text-white" > <i class="fa fa-edit" style="font-size:28px;color:blue;"></i> </a> 

                     <a href="delete.php?deleteid=<?php echo $res['id']; ?>" class="text-white" > <i class="fa fa-trash-o" style="font-size:28px;color:red; padding-left:12px"></i> </a>  </td>
                </tr>
                <?php
                     };
                ?>
        </tbody>
    </table>
    </body>
</html>