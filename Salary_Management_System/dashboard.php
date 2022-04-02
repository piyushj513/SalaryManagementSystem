<head>
    <title>SMS</title>
    <?php include 'header.php'  ?>
</head>
<body>
<?php include '_navbar.php'  ?>

<div class="jumbotron container text-center">

    <form action="add_employee.php"> 
        <button  type="submit" class="btn btn-outline-primary rounded" ><strong>Add New Employee</strong></button> 
    </form> 
    <br> 
    <form action="accounts.php"> 
        <button  type="submit" class="btn btn-outline-danger rounded" ><strong>Accounts</strong></button> 
    </form> 
    <br> 
    <form action="payroll.php"> 
        <button  type="submit" class="btn btn-outline-success rounded" ><strong>Salary</strong></button> 
    </form> 
    <br> 
    <form action="department.php">
        <button  type="submit" class="btn btn-outline-info rounded" ><strong>Departments</strong></button> 
    </form> 
    <br> 
    <form action="report.php"> 
        <button  type="submit" class="btn btn-outline-warning rounded" ><strong>Prepare Monthly Salary</strong></button> 
    </form> 

</div>

</body> 
</html> 