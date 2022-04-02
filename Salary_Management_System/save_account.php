<?php include 'header.php'  ?>
<body>
<?php include '_navbar.php'  ?>
<div class="container">

<?php

include './configs/db_config.php';


$empid = $_POST['empid'];
$role = $_POST['role'];
$bank = $_POST['bank'];
$b_type = $_POST['b_type'];
$es = $_POST['es'];
$bnk_acc = $_POST['bnk_acc'];
$pf = $_POST['pf'];
$os = $_POST['os'];
$es = $_POST['es'];


$sql = "INSERT INTO Employee_accounts (employee_id,role,bank_acc_no,bank_name,pf_acc_no,bank_type,emp_share,org_share)
VALUES ('$empid', '$role','$bnk_acc', '$bank','$pf','$b_type',$os,$es)";

if ($conn->query($sql) === TRUE) {
    // echo "New Employee created successfully";
    ?>

  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Account <strong class="text-capitalize"><?php echo $empid; ?></strong> added Successfully.
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