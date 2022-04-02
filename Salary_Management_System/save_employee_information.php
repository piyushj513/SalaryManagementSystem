<?php include 'header.php'  ?>
<body>
<?php include '_navbar.php'  ?>
<div class="container">

<?php

include './configs/db_config.php';

$fname = $_POST['fname'];
$empid = $_POST['empid'];
$age = $_POST['age'];
$dept = $_POST['dept'];
$contact = $_POST['cno'];
$email = $_POST['email'];


$lname = $_POST['lname'];
$gender = $_POST['gender'];
$workexp = $_POST['wexp'];
$salary = $_POST['esalary'];
$address = $_POST['e_address'];
$country = $_POST['country'];

$sql = "INSERT INTO Employee_Information (employee_id,first_name,last_name,gender,department,experience,salary,age,address,email,mobile,country)
VALUES ('$empid', '$fname', '$lname', '$gender','$dept',$workexp,$salary,$age,'$address','$email',$contact,'$country')";

if ($conn->query($sql) === TRUE) {
    // echo "New Employee created successfully";
    ?>

  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Employee <strong class="text-capitalize"><?php echo $fname." ".$lname ?></strong> added Successfully.
  </div>


<div class="container col-sm-8">
    <div class="card-cloum">
      <div class="card bg-white">
        <div class="card-body text-center">

          <div class="row">

                <div class="col-sm-6">
                  <div class="form-group text-monospace text-right">
                    <label for="fname" >Employee Name:</label>
                  </div>
                  <div class="form-group text-monospace text-right">
                    <label for="empid">Employee Id:</label>
                  </div>
                  <div class="form-group text-monospace text-right">
                    <label for="dept">Department:</label>
                  </div>
                  <div class="form-group text-monospace text-right" >
                    <label for="wexp">Work Experience:</label>
                  </div>
                  <div class="form-group text-monospace text-right" >
                    <label for="wexp">Email:</label>
                  </div>
                  <div class="form-group text-monospace text-right">
                    <label for="e_address">Address:</label>
                  </div>
                  <div class="form-group text-monospace text-right">
                    <label for="e_address">Country:</label>
                  </div>
                </div>


                <div class="col-sm-6">
                  <div class="form-group text-monospace text-left">
                    <label class="text-capitalize" ><?php  echo $fname." ".$lname ; ?></label>
                  </div>
                  <div class="form-group text-monospace text-left">
                    <label><?php  echo $empid ; ?></label>
                  </div>
                  <div class="form-group text-monospace text-left">
                    <label><?php  echo $dept; ?> </label>
                  </div>
                  <div class="form-group text-monospace text-left">
                    <label><?php  echo $workexp ; ?><span class="small" >  years</span> </label>
                  </div>
                  <div class="form-group text-monospace text-left"> 
                    <label><?php  echo $email; ?> </label>
                  </div>
                  
                  <div class="form-group text-monospace text-left">
                    <label><?php  echo $address; ?> </label>
                  </div>
                  <div class="form-group text-monospace text-left">
                    <label><?php  echo $country; ?> .</label>
                  </div>
                </div>


          </div>




        </div>
      </div>
    </div>


</div>

<div class="container text-center mt-3">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Account Details
  </button>
</div>
<?php 

    $get_id = "SELECT * FROM Employee_Information order by ts desc limit  1; ";
    $ids = $conn->query($get_id);
    if ($ids->num_rows > 0) {
      // output data of each row
      while($rec = $ids->fetch_assoc()) {
        ?>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Account Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form  action="save_account.php" method="post" >
            <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group text-monospace">
                    <label for="empid">Employee_ID:</label>
                    <input type="text" class="form-control" name="empid" value="<?php echo $rec['employee_id']; }} ?>" required>
                  </div>
                  
                  <div class="form-group text-monospace">
                    <label for="bank">Bank Name:</label>
                    <input type="text" class="form-control" name="bank" required>
                  </div>
                  <div class="form-group text-monospace">
                    <label for="b_type">Bank Type:</label>
                    <select class="form-control" name="b_type">
                        <option>Savings</option>
                        <option>Current</option>
                    </select>
                  </div>
                  <div class="form-group text-monospace">
                    <label for="es">Employee Share:</label>
                    <input type="text" class="form-control" name="es" required>
                  </div>
                </div>


                <div class="col-sm-6">
                  <div class="form-group text-monospace">
                    <label for="role">Role:</label>
                    <select class="form-control" name="role" id="sel2">
                        <option>Employee</option>
                        <option>Manager</option>
                    </select>
                  </div>
                  
                  <div class="form-group text-monospace">
                    <label for="bnk_acc">Bank Acc.No:</label>
                    <input type="text" class="form-control" name="bnk_acc" required>
                  </div>
                  <div class="form-group text-monospace">
                    <label for="pf">PF.No:</label>
                    <input type="text" class="form-control" name="pf" required>
                  </div>
                  <div class="form-group text-monospace">
                    <label for="os">Organization Share:</label>
                    <input type="text" class="form-control" name="os" required>
                  </div>
                </div>
              </div>
        
            <div class="float-right mt-3">
              <button class="btn btn-danger" onclick="reset()" >Reset</button>
              <input class="btn btn-success" type="submit" name="submit" value="Save">
            </div>
          
          
          
          
          
          
          </form>
        
        
          </div>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





    <?php
    

} else {
    echo $conn->error;
    echo "Some error occured";
}

$conn->close();


?>

</div>






















</body>