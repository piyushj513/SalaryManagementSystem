<head>
    <title>SMS</title>
    <?php include 'header.php'  ?>
</head>
<style>
    {
        .Branch{
            max-width:500px;
            margin:0 auto;
         
            
        }
    }
    </style>
<body>
<?php include '_navbar.php'  ?>
<div class="col-sm-12 text-center mt-4 ">
<div class="row">
    <div class="col-sm-6">
        <table class="table table-bordered">
        <li class="list-group-item active">Department Details</li>
        <thead class="bg-success">
        <tr>
            <th>Employee_ID</th>
            <th>Department</th>
            <th>Role</th>
        </thead>
        <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Salary_Management_System";
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        $sql = "SELECT employee_id, department, role FROM department";
        $result = $conn->query($sql);
        $sql = "SELECT employee_id, department, role FROM department";
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {  
        
        
        ?>
        <tr>
            <td><?php echo $row["employee_id"] ?></td>
            <td><?php echo $row["department"]?></td>
            <td><?php echo $row["role"]?></td>
        </tr>

        <?php
            }        
        }
        ?>

        
        </tbody>
    </table>    
    </div>
