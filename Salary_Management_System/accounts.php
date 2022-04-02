<head>
    <title>SMS</title>
    <?php include 'header.php'  ?>
</head>
<body>
<?php include '_navbar.php'  ?>
<?php include './configs/db_config.php'  ?>

<?php 
$sql = "SELECT * FROM Employee_Information INNER JOIN Employee_accounts ON Employee_Information.employee_id=Employee_accounts.employee_id order by  Employee_Information.first_name;";
$result = $conn->query($sql);
?>


<div class="col-sm-12 text-center mt-4 ">
<div class="row">
    <div class="col-sm-6">
        <table class="table table-bordered">
        <li class="list-group-item active">Provident Fund Details</li>
        <thead class="bg-success">
        <tr>
            <th>Employee Id</th>
            <th>Employee Name</th>
            <th>P.F Number </th>
            <th>Employee share</th>
            <th>Organization share</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {  
        
        
        ?>
        <tr>
            <td><?php echo $row["employee_id"] ?></td>
            <td><?php echo $row["first_name"]." ".$row["last_name"] ?></td>
            <td><?php echo $row["pf_acc_no"] ?></td>
            <td><?php echo $row["emp_share"] ?> %</td>
            <td><?php echo $row["org_share"] ?> %</td>
        </tr>

        <?php
            }        
        }
        ?>

        
        </tbody>
    </table>    
    </div>

    <div class="col-sm-6">
        <table class="table table-bordered">
        <li class="list-group-item active">Bank Account Details</li>
        <thead class="bg-success">
        <tr>
            <th>Employee Id</th>
            <th>Employee Name</th>
            <th>Bank Name</th>
            <th>Account Number</th>
            <th>Account Type </th>
        </tr>
        </thead>
        <tbody>
        <?php

        $sql1 = "SELECT * FROM Employee_Information INNER JOIN Employee_accounts ON Employee_Information.employee_id=Employee_accounts.employee_id order by  Employee_Information.first_name;";
        $result1 = $conn->query($sql1);



        if ($result1->num_rows > 0) {
            // output data of each row
            while($row1 = $result1->fetch_assoc()) {  
        
        
        ?>
            <tr>
                <td><?php echo $row1["employee_id"] ?></td>
                <td><?php echo $row1["first_name"]." ".$row1["last_name"] ?></td>
                <td><?php echo $row1["bank_name"] ?></td>
                <td><?php echo $row1["bank_acc_no"] ?>  </td>
                <td><?php echo $row1["bank_type"] ?> </td>
            </tr>
            <?php
            }        
        }
        ?>
        </tbody>
    </table>
    </div>
    
</div>


</div>