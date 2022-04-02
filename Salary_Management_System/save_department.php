<?php include 'header.php'  ?>
<body>
<?php include '_navbar.php'  ?>
<div class="container">

<?php

include './configs/db_config.php';


$empid = $_POST['empid'];
$role = $_POST['role'];
$department = $_POST['dep'];





$sql = "INSERT INTO department (employee_id,department,role)
VALUES ('$empid','$department','$role')";

if ($conn->query($sql) === TRUE) {
    // echo "New Employee created successfully";
    ?>

  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Department <strong class="text-capitalize"><?php echo $department; ?></strong> added Successfully.
  </div>

  <div class="container text-center">
    <a class="btn btn-primary" href="dashboard.php"> Home </a>
  </div>

  <?php
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

  ?>